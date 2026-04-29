<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Auth\Application\Actions\LoginAction;
use Modules\Auth\Application\DTOs\LoginData;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

uses(RefreshDatabase::class);

it('crea token al autenticar credenciales válidas', function (): void {
    $user = User::factory()->create([
        'email' => 'admin@example.com',
        'password' => 'password123',
    ]);

    $action = app(LoginAction::class);
    $result = $action(new LoginData(
        email: 'admin@example.com',
        password: 'password123',
        deviceName: 'unit-test-device',
    ));

    expect($result['token'])->not->toBeEmpty()
        ->and($result['user']->id)->toBe($user->id);
});

it('lanza excepción al autenticar credenciales inválidas', function (): void {
    User::factory()->create([
        'email' => 'admin@example.com',
        'password' => 'password123',
    ]);

    $action = app(LoginAction::class);

    expect(fn () => $action(new LoginData(
        email: 'admin@example.com',
        password: 'incorrecta',
        deviceName: 'unit-test-device',
    )))->toThrow(UnauthorizedHttpException::class);
});
