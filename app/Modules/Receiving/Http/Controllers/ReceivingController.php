<?php

declare(strict_types=1);

namespace Modules\Receiving\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Receiving\Application\Actions\LinkLotToReceiptAction;
use Modules\Receiving\Application\Actions\RegisterReceiptAction;
use Modules\Receiving\Application\DTOs\LinkLotToReceiptData;
use Modules\Receiving\Application\DTOs\RegisterReceiptData;
use Modules\Receiving\Http\Requests\LinkLotToReceiptRequest;
use Modules\Receiving\Http\Requests\RegisterReceiptRequest;
use Modules\Receiving\Http\Resources\ReceiptLotLinkResource;
use Modules\Receiving\Http\Resources\ReceiptResource;
use OpenApi\Attributes as OA;

final class ReceivingController extends Controller
{
    #[OA\Post(
        path: '/api/v1/receiving/receipts',
        tags: ['Receiving'],
        summary: 'Registra una recepción',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['supplier_reference', 'received_at'],
                properties: [
                    new OA\Property(property: 'supplier_reference', type: 'string'),
                    new OA\Property(property: 'received_at', type: 'string', format: 'date-time'),
                    new OA\Property(property: 'notes', type: 'string'),
                ],
            ),
        ),
        responses: [new OA\Response(response: 201, description: 'Recepción creada')],
    )]
    public function registerReceipt(RegisterReceiptRequest $request, RegisterReceiptAction $action): JsonResponse
    {
        $receipt = $action(new RegisterReceiptData(
            supplierReference: (string) $request->string('supplier_reference'),
            receivedAt: (string) $request->string('received_at'),
            notes: $request->filled('notes') ? (string) $request->string('notes') : null,
        ));

        return response()->json([
            'data' => ReceiptResource::make($receipt),
            'meta' => ['message' => 'Recepción registrada correctamente.'],
        ], 201);
    }

    #[OA\Post(
        path: '/api/v1/receiving/receipts/{receiptId}/lots',
        tags: ['Receiving'],
        summary: 'Asocia lote a recepción',
        parameters: [
            new OA\Parameter(name: 'receiptId', in: 'path', required: true, schema: new OA\Schema(type: 'integer')),
        ],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['product_id', 'lot_number', 'expires_at', 'quantity'],
                properties: [
                    new OA\Property(property: 'product_id', type: 'integer'),
                    new OA\Property(property: 'lot_number', type: 'string'),
                    new OA\Property(property: 'expires_at', type: 'string', format: 'date'),
                    new OA\Property(property: 'quantity', type: 'integer'),
                    new OA\Property(property: 'location_id', type: 'integer'),
                ],
            ),
        ),
        responses: [new OA\Response(response: 201, description: 'Lote asociado y mercancía recibida')],
    )]
    public function linkLotToReceipt(int $receiptId, LinkLotToReceiptRequest $request, LinkLotToReceiptAction $action): JsonResponse
    {
        $link = $action(new LinkLotToReceiptData(
            receiptId: $receiptId,
            productId: $request->integer('product_id'),
            lotNumber: (string) $request->string('lot_number'),
            expiresAt: (string) $request->string('expires_at'),
            quantity: $request->integer('quantity'),
            locationId: $request->filled('location_id') ? $request->integer('location_id') : null,
        ));

        return response()->json([
            'data' => ReceiptLotLinkResource::make($link),
            'meta' => ['message' => 'Lote asociado correctamente.'],
        ], 201);
    }
}
