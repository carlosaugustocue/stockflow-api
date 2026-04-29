<?php

declare(strict_types=1);

namespace Modules\Shared\Providers;

use Illuminate\Support\ServiceProvider;

abstract class BaseModuleServiceProvider extends ServiceProvider
{
    protected string $moduleName = '';

    protected function modulePath(string $path = ''): string
    {
        $basePath = app_path('Modules/'.$this->moduleName);

        return $path === '' ? $basePath : $basePath.'/'.$path;
    }

    protected function loadModuleRoutes(): void
    {
        $routesPath = $this->modulePath('routes.php');

        if (is_file($routesPath)) {
            $this->loadRoutesFrom($routesPath);
        }
    }

    protected function loadModuleMigrations(): void
    {
        $migrationsPath = $this->modulePath('Database/Migrations');

        if (is_dir($migrationsPath)) {
            $this->loadMigrationsFrom($migrationsPath);
        }
    }
}
