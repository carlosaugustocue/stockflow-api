<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Auth\Database\Seeders\AuthRolesSeeder;
use Modules\Auth\Infrastructure\Models\Role;

uses(RefreshDatabase::class);

it('permite iniciar sesión con credenciales válidas', function (): void {
    $this->seed(AuthRolesSeeder::class);

    $user = User::factory()->create([
        'email' => 'operador@example.com',
        'password' => 'password123',
    ]);

    $role = Role::query()->where('name', 'receiving_operator')->firstOrFail();
    $user->roles()->attach($role->id);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'operador@example.com',
        'password' => 'password123',
        'device_name' => 'pest-suite',
    ]);

    $response->assertOk()
        ->assertJsonPath('data.user.email', 'operador@example.com')
        ->assertJsonStructure(['data' => ['token', 'user'], 'meta']);
});

it('rechaza el inicio de sesión con credenciales inválidas', function (): void {
    User::factory()->create([
        'email' => 'operador@example.com',
        'password' => 'password123',
    ]);

    $response = $this->postJson('/api/v1/auth/login', [
        'email' => 'operador@example.com',
        'password' => 'incorrecta',
        'device_name' => 'pest-suite',
    ]);

    $response->assertUnauthorized();
});

it('retorna el usuario autenticado con token sanctum', function (): void {
    $this->seed(AuthRolesSeeder::class);

    $user = User::factory()->create();
    $token = $user->createToken('pest-suite')->plainTextToken;

    $response = $this->withToken($token)->getJson('/api/v1/auth/me');

    $response->assertOk()
        ->assertJsonPath('data.id', $user->id);
});

it('revoca el token actual en logout', function (): void {
    $user = User::factory()->create();
    $token = $user->createToken('pest-suite')->plainTextToken;

    $response = $this->withToken($token)->postJson('/api/v1/auth/logout');

    $response->assertOk();

    expect($user->tokens()->count())->toBe(0);
});
