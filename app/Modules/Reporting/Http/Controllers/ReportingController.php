<?php

declare(strict_types=1);

namespace Modules\Reporting\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Reporting\Application\Actions\GetInventoryAccuracyAction;
use Modules\Reporting\Application\Actions\GetInventoryMetricsAction;
use Modules\Reporting\Application\Actions\GetInventoryRotationByCategoryAction;
use Modules\Reporting\Application\Actions\GetOperationalAlertsAction;
use Modules\Reporting\Application\Actions\GetReportingSummaryAction;
use Modules\Reporting\Application\Actions\GetServiceLevelAction;
use Modules\Reporting\Application\Actions\GetWarehouseUtilizationByLocationAction;
use Modules\Reporting\Application\Exports\InventoryMetricsExport;
use Modules\Reporting\Http\Resources\InventoryMetricResource;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;
use OpenApi\Attributes as OA;

final class ReportingController extends Controller
{
    /**
     * @return array<string, string|null>
     */
    private function exportFilters(Request $request): array
    {
        return [
            'from' => $request->filled('from') ? (string) $request->string('from') : null,
            'to' => $request->filled('to') ? (string) $request->string('to') : null,
            'category' => $request->filled('category') ? (string) $request->string('category') : null,
            'zone' => $request->filled('zone') ? (string) $request->string('zone') : null,
        ];
    }

    #[OA\Get(
        path: '/api/v1/reporting/inventory-metrics',
        tags: ['Reporting'],
        summary: 'Obtiene tabla materializada de métricas de inventario',
        responses: [new OA\Response(response: 200, description: 'Métricas de inventario')],
    )]
    public function inventoryMetrics(GetInventoryMetricsAction $action): JsonResponse
    {
        return response()->json([
            'data' => InventoryMetricResource::collection($action()),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/summary',
        tags: ['Reporting'],
        summary: 'Obtiene indicadores agregados de reporting',
        responses: [new OA\Response(response: 200, description: 'Resumen de indicadores')],
    )]
    public function summary(GetReportingSummaryAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action(),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/inventory-metrics/export/pdf',
        tags: ['Reporting'],
        summary: 'Exporta métricas de inventario en PDF',
        responses: [new OA\Response(response: 200, description: 'Archivo PDF')],
    )]
    public function exportMetricsPdf(Request $request)
    {
        $filters = $this->exportFilters($request);
        $metrics = InventoryMetric::query()
            ->orderBy('product_id')
            ->when($filters['from'], fn ($q, $from): mixed => $q->whereDate('updated_from_event_at', '>=', $from))
            ->when($filters['to'], fn ($q, $to): mixed => $q->whereDate('updated_from_event_at', '<=', $to))
            ->when($filters['category'], fn ($q, $category): mixed => $q->whereHas('product', fn ($p): mixed => $p->where('category', $category)))
            ->when($filters['zone'], function ($q, $zone): mixed {
                return $q->whereHas('product.lots.location', function ($location) use ($zone): void {
                    $location->where('code', 'like', $zone.'%')
                        ->orWhere('name', 'like', '%'.$zone.'%');
                });
            })
            ->get();

        $pdf = Pdf::loadView('reporting.inventory-metrics-pdf', [
            'metrics' => $metrics,
        ]);

        return $pdf->download('inventory-metrics.pdf');
    }

    #[OA\Get(
        path: '/api/v1/reporting/inventory-metrics/export/excel',
        tags: ['Reporting'],
        summary: 'Exporta métricas de inventario en Excel',
        responses: [new OA\Response(response: 200, description: 'Archivo XLSX')],
    )]
    public function exportMetricsExcel(Request $request)
    {
        return Excel::download(new InventoryMetricsExport($this->exportFilters($request)), 'inventory-metrics.xlsx');
    }

    #[OA\Get(
        path: '/api/v1/reporting/alerts',
        tags: ['Reporting'],
        summary: 'Obtiene alertas operativas de vencimiento, stock y despacho',
        responses: [new OA\Response(response: 200, description: 'Alertas operativas')],
    )]
    public function alerts(GetOperationalAlertsAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action(),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/warehouse-utilization',
        tags: ['Reporting'],
        summary: 'Obtiene utilización de almacén por ubicación',
        responses: [new OA\Response(response: 200, description: 'Utilización por ubicación')],
    )]
    public function warehouseUtilization(GetWarehouseUtilizationByLocationAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action(),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/service-level',
        tags: ['Reporting'],
        summary: 'Obtiene nivel de servicio (completitud y puntualidad) con filtros',
        responses: [new OA\Response(response: 200, description: 'Nivel de servicio')],
    )]
    public function serviceLevel(Request $request, GetServiceLevelAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action($request),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/inventory-rotation',
        tags: ['Reporting'],
        summary: 'Obtiene índice de rotación por categoría y tendencia básica',
        responses: [new OA\Response(response: 200, description: 'Rotación por categoría')],
    )]
    public function inventoryRotation(GetInventoryRotationByCategoryAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action(),
            'meta' => [],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/reporting/accuracy',
        tags: ['Reporting'],
        summary: 'Obtiene exactitud de inventario (teórico vs stock registrado)',
        responses: [new OA\Response(response: 200, description: 'Exactitud de inventario')],
    )]
    public function accuracy(GetInventoryAccuracyAction $action): JsonResponse
    {
        return response()->json([
            'data' => $action(),
            'meta' => [],
        ]);
    }
}
