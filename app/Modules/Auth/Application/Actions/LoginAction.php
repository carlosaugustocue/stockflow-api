<?php

declare(strict_types=1);

namespace Modules\Auth\Application\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Modules\Auth\Application\DTOs\LoginData;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

final class LoginAction
{
    /**
     * @return array{token:string,user:User}
     */
    public function __invoke(LoginData $data): array
    {
        /** @var User|null $user */
        $user = User::query()->where('email', $data->email)->first();

        if (! $user || ! Hash::check($data->password, $user->password)) {
            throw new UnauthorizedHttpException('Bearer', 'Credenciales inválidas.');
        }

        $token = $user->createToken($data->deviceName)->plainTextToken;

        return [
            'token' => $token,
            'user' => $user->load('roles.permissions'),
        ];
    }
}
