<?php

declare(strict_types=1);

namespace Modules\Auth\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Application\Actions\GetAuthenticatedUserAction;
use Modules\Auth\Application\Actions\LoginAction;
use Modules\Auth\Application\Actions\LogoutAction;
use Modules\Auth\Application\DTOs\LoginData;
use Modules\Auth\Http\Requests\LoginRequest;
use Modules\Auth\Http\Resources\AuthUserResource;
use OpenApi\Attributes as OA;

final class AuthController extends Controller
{
    #[OA\Post(
        path: '/api/v1/auth/login',
        tags: ['Auth'],
        summary: 'Iniciar sesión con credenciales',
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ['email', 'password', 'device_name'],
                properties: [
                    new OA\Property(property: 'email', type: 'string', format: 'email'),
                    new OA\Property(property: 'password', type: 'string'),
                    new OA\Property(property: 'device_name', type: 'string'),
                ],
            ),
        ),
        responses: [
            new OA\Response(response: 200, description: 'Autenticación exitosa'),
            new OA\Response(response: 401, description: 'Credenciales inválidas'),
        ],
    )]
    public function login(LoginRequest $request, LoginAction $action): JsonResponse
    {
        $result = $action(new LoginData(
            email: (string) $request->string('email'),
            password: (string) $request->string('password'),
            deviceName: (string) $request->string('device_name'),
        ));

        return response()->json([
            'data' => [
                'token' => $result['token'],
                'user' => AuthUserResource::make($result['user']),
            ],
            'meta' => [
                'message' => 'Inicio de sesión exitoso.',
            ],
        ]);
    }

    #[OA\Post(
        path: '/api/v1/auth/logout',
        tags: ['Auth'],
        security: [['bearerAuth' => []]],
        summary: 'Cerrar sesión y revocar token actual',
        responses: [new OA\Response(response: 200, description: 'Sesión cerrada')],
    )]
    public function logout(Request $request, LogoutAction $action): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();

        $action($user);

        return response()->json([
            'data' => null,
            'meta' => [
                'message' => 'Sesión cerrada correctamente.',
            ],
        ]);
    }

    #[OA\Get(
        path: '/api/v1/auth/me',
        tags: ['Auth'],
        security: [['bearerAuth' => []]],
        summary: 'Obtiene el usuario autenticado',
        responses: [new OA\Response(response: 200, description: 'Usuario autenticado')],
    )]
    public function me(Request $request, GetAuthenticatedUserAction $action): JsonResponse
    {
        /** @var User $user */
        $user = $request->user();

        return response()->json([
            'data' => AuthUserResource::make($action($user)),
            'meta' => [],
        ]);
    }
}
