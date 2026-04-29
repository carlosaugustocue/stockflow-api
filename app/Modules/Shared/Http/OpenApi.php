<?php

declare(strict_types=1);

namespace Modules\Shared\Http;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'Stockflow API',
    description: 'API REST para inventario y logística de centros de distribución',
)]
#[OA\Server(
    url: L5_SWAGGER_CONST_HOST,
    description: 'Servidor principal',
)]
#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'Token',
)]
final class OpenApi {}
