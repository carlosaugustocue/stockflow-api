<?php

declare(strict_types=1);

namespace Modules\Reporting\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Reporting\Application\Actions\GetInventoryMetricsAction;
use Modules\Reporting\Application\Actions\GetReportingSummaryAction;
use Modules\Reporting\Application\Exports\InventoryMetricsExport;
use Modules\Reporting\Http\Resources\InventoryMetricResource;
use Modules\Reporting\Infrastructure\Models\InventoryMetric;
use OpenApi\Attributes as OA;

final class ReportingController extends Controller
{
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
    public function exportMetricsPdf()
    {
        $metrics = InventoryMetric::query()
            ->orderBy('product_id')
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
    public function exportMetricsExcel()
    {
        return Excel::download(new InventoryMetricsExport, 'inventory-metrics.xlsx');
    }
}
