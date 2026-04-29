<?php

declare(strict_types=1);

namespace Modules\Inventory\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Inventory\Application\Actions\AdjustStockAction;
use Modules\Inventory\Application\Actions\GetProductStockAction;
use Modules\Inventory\Application\Actions\ListProductsBelowReorderPointAction;
use Modules\Inventory\Application\Actions\RegisterProductAction;
use Modules\Inventory\Application\DTOs\AdjustStockData;
use Modules\Inventory\Application\DTOs\RegisterProductData;
use Modules\Inventory\Http\Requests\AdjustStockRequest;
use Modules\Inventory\Http\Requests\RegisterProductRequest;
use Modules\Inventory\Http\Requests\UpdateProductRequest;
use Modules\Inventory\Http\Resources\ProductResource;
use Modules\Inventory\Infrastructure\Repositories\EloquentProductRepository;
use OpenApi\Attributes as OA;

final class InventoryController extends Controller
{
    #[OA\Get(
        path: '/api/v1/inventory/products',
        tags: ['Inventory'],
        summary: 'Lista productos con paginación por cursor',
        parameters: [
            new OA\Parameter(name: 'per_page', in: 'query', schema: new OA\Schema(type: 'integer', minimum: 1, maximum: 100)),
        ],
        responses: [new OA\Response(response: 200, description: 'Listado de productos')],
    )]
    public function index(Request $request, EloquentProductRepository $repository): JsonResponse
    {
        $perPage = max(1, min(100, (int) $request->integer('per_page', 15)));
        $products = $repository->cursorPaginate($perPage);

        return response()->json([
            'data' => ProductResource::collection($products->items()),
            'meta' => [
                'next_cursor' => $products->nextCursor()?->encode(),
                'prev_cursor' => $products->previousCursor()?->encode(),
            ],
        ]);
    }

    #[OA\Post(
        path: '/api/v1/inventory/products',
        tags: ['Inventory'],
        summary: 'Registra un producto',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['name', 'sku', 'reorder_point'],
                properties: [
                    new OA\Property(property: 'name', type: 'string'),
                    new OA\Property(property: 'category', type: 'string'),
                    new OA\Property(property: 'sku', type: 'string'),
                    new OA\Property(property: 'reorder_point', type: 'integer', minimum: 0),
                ],
            ),
        ),
        responses: [new OA\Response(response: 201, description: 'Producto registrado')],
    )]
    public function store(RegisterProductRequest $request, RegisterProductAction $action): JsonResponse
    {
        $product = $action(new RegisterProductData(
            name: (string) $request->string('name'),
            category: $request->filled('category') ? (string) $request->string('category') : null,
            sku: strtoupper((string) $request->string('sku')),
            reorderPoint: $request->integer('reorder_point'),
        ));

        return response()->json([
            'data' => ProductResource::make($product),
            'meta' => ['message' => 'Producto registrado correctamente.'],
        ], 201);
    }

    #[OA\Get(
        path: '/api/v1/inventory/products/{productId}',
        tags: ['Inventory'],
        summary: 'Consulta stock de producto',
        parameters: [
            new OA\Parameter(name: 'productId', in: 'path', required: true, schema: new OA\Schema(type: 'integer')),
        ],
        responses: [new OA\Response(response: 200, description: 'Detalle de producto')],
    )]
    public function show(int $productId, GetProductStockAction $action): JsonResponse
    {
        $product = $action($productId);

        return response()->json([
            'data' => ProductResource::make($product),
            'meta' => [],
        ]);
    }

    #[OA\Patch(
        path: '/api/v1/inventory/products/{productId}/stock',
        tags: ['Inventory'],
        summary: 'Ajusta stock de un producto',
        parameters: [
            new OA\Parameter(name: 'productId', in: 'path', required: true, schema: new OA\Schema(type: 'integer')),
        ],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['quantity', 'operation', 'reason'],
                properties: [
                    new OA\Property(property: 'quantity', type: 'integer', minimum: 1),
                    new OA\Property(property: 'operation', type: 'string', enum: ['add', 'subtract']),
                    new OA\Property(property: 'reason', type: 'string'),
                ],
            ),
        ),
        responses: [new OA\Response(response: 200, description: 'Stock ajustado')],
    )]
    public function adjustStock(int $productId, AdjustStockRequest $request, AdjustStockAction $action): JsonResponse
    {
        $product = $action(new AdjustStockData(
            productId: $productId,
            quantity: $request->integer('quantity'),
            operation: (string) $request->string('operation'),
            reason: (string) $request->string('reason'),
        ));

        return response()->json([
            'data' => ProductResource::make($product),
            'meta' => ['message' => 'Stock ajustado correctamente.'],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/inventory/products/below-reorder-point',
        tags: ['Inventory'],
        summary: 'Lista productos bajo punto de reorden',
        responses: [new OA\Response(response: 200, description: 'Listado filtrado')],
    )]
    public function belowReorderPoint(ListProductsBelowReorderPointAction $action): JsonResponse
    {
        return response()->json([
            'data' => ProductResource::collection($action()),
            'meta' => [],
        ]);
    }

    #[OA\Patch(
        path: '/api/v1/inventory/products/{productId}',
        tags: ['Inventory'],
        summary: 'Actualiza datos base de producto',
        parameters: [
            new OA\Parameter(name: 'productId', in: 'path', required: true, schema: new OA\Schema(type: 'integer')),
        ],
        responses: [new OA\Response(response: 200, description: 'Producto actualizado')],
    )]
    public function update(int $productId, UpdateProductRequest $request, EloquentProductRepository $repository): JsonResponse
    {
        $payload = [];

        if ($request->has('name')) {
            $payload['name'] = (string) $request->string('name');
        }
        if ($request->has('category')) {
            $payload['category'] = $request->filled('category') ? (string) $request->string('category') : null;
        }
        if ($request->has('sku')) {
            $payload['sku'] = strtoupper((string) $request->string('sku'));
        }
        if ($request->has('reorder_point')) {
            $payload['reorder_point'] = $request->integer('reorder_point');
        }

        $product = $repository->update($productId, $payload);

        return response()->json([
            'data' => ProductResource::make($product),
            'meta' => ['message' => 'Producto actualizado correctamente.'],
        ]);
    }

    #[OA\Delete(
        path: '/api/v1/inventory/products/{productId}',
        tags: ['Inventory'],
        summary: 'Da de baja un producto',
        parameters: [
            new OA\Parameter(name: 'productId', in: 'path', required: true, schema: new OA\Schema(type: 'integer')),
        ],
        responses: [new OA\Response(response: 204, description: 'Producto eliminado')],
    )]
    public function destroy(int $productId, EloquentProductRepository $repository): JsonResponse
    {
        $repository->delete($productId);

        return response()->json([], 204);
    }
}
