<?php

declare(strict_types=1);

namespace Modules\Auth\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Auth\Infrastructure\Models\Role;

final class AuthRolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'description' => 'Control total del sistema'],
            ['name' => 'warehouse_manager', 'description' => 'Gestión de almacén e inventario'],
            ['name' => 'receiving_operator', 'description' => 'Operación de recepción de mercancía'],
            ['name' => 'dispatch_operator', 'description' => 'Operación de despacho y picking'],
        ];

        foreach ($roles as $role) {
            Role::query()->firstOrCreate(
                ['name' => $role['name']],
                ['description' => $role['description']],
            );
        }
    }
}
