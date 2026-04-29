<?php

declare(strict_types=1);

namespace Modules\Dispatch\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Dispatch\Application\Actions\ConfirmDispatchAction;
use Modules\Dispatch\Application\Actions\CreateDispatchOrderAction;
use Modules\Dispatch\Application\Actions\PickStockUsingFEFOAction;
use Modules\Dispatch\Application\DTOs\CreateDispatchOrderData;
use Modules\Dispatch\Http\Requests\CreateDispatchOrderRequest;
use Modules\Dispatch\Http\Resources\DispatchOrderResource;
use OpenApi\Attributes as OA;

final class DispatchController extends Controller
{
    #[OA\Post(
        path: '/api/v1/dispatch/orders',
        tags: ['Dispatch'],
        summary: 'Crea orden de despacho',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['order_reference', 'product_id', 'quantity'],
                properties: [
                    new OA\Property(property: 'order_reference', type: 'string'),
                    new OA\Property(property: 'product_id', type: 'integer'),
                    new OA\Property(property: 'quantity', type: 'integer', minimum: 1),
                ],
            ),
        ),
        responses: [new OA\Response(response: 201, description: 'Orden creada')],
    )]
    public function createOrder(CreateDispatchOrderRequest $request, CreateDispatchOrderAction $action): JsonResponse
    {
        $order = $action(new CreateDispatchOrderData(
            orderReference: (string) $request->string('order_reference'),
            productId: $request->integer('product_id'),
            quantity: $request->integer('quantity'),
        ));

        return response()->json([
            'data' => DispatchOrderResource::make($order),
            'meta' => ['message' => 'Orden de despacho creada.'],
        ], 201);
    }

    #[OA\Post(
        path: '/api/v1/dispatch/orders/{dispatchOrderId}/pick-fefo',
        tags: ['Dispatch'],
        summary: 'Ejecuta picking FEFO',
        parameters: [new OA\Parameter(name: 'dispatchOrderId', in: 'path', required: true, schema: new OA\Schema(type: 'integer'))],
        responses: [new OA\Response(response: 200, description: 'Picking realizado')],
    )]
    public function pickFefo(int $dispatchOrderId, PickStockUsingFEFOAction $action): JsonResponse
    {
        $order = $action($dispatchOrderId);

        return response()->json([
            'data' => DispatchOrderResource::make($order->load('picks')),
            'meta' => ['message' => 'Picking FEFO completado.'],
        ]);
    }

    #[OA\Post(
        path: '/api/v1/dispatch/orders/{dispatchOrderId}/confirm',
        tags: ['Dispatch'],
        summary: 'Confirma despacho y descuenta inventario',
        parameters: [new OA\Parameter(name: 'dispatchOrderId', in: 'path', required: true, schema: new OA\Schema(type: 'integer'))],
        responses: [new OA\Response(response: 200, description: 'Despacho confirmado')],
    )]
    public function confirm(int $dispatchOrderId, ConfirmDispatchAction $action): JsonResponse
    {
        $order = $action($dispatchOrderId);

        return response()->json([
            'data' => DispatchOrderResource::make($order->load('picks')),
            'meta' => ['message' => 'Despacho confirmado.'],
        ]);
    }
}
