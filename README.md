<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
# Stockflow API (Laravel 13)

Backend REST API stateless para gestión de inventario y logística en un monolito modular.

## Requisitos

- PHP 8.3+
- Composer 2+
- SQLite (local) o MySQL 8 (entornos de integración)

## Setup local

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

## Ejecutar aplicación

```bash
php artisan serve
```

API base: `http://127.0.0.1:8000/api/v1`

## Módulos activos

- `Auth`
- `Inventory`
- `Receiving` (esqueleto)
- `Dispatch` (esqueleto)
- `Reporting` (esqueleto)
- `Shared`

## Endpoints principales implementados

### Auth

- `POST /api/v1/auth/login`
- `POST /api/v1/auth/logout`
- `GET /api/v1/auth/me`

### Inventory

- `GET /api/v1/inventory/products`
- `POST /api/v1/inventory/products`
- `GET /api/v1/inventory/products/{productId}`
- `PATCH /api/v1/inventory/products/{productId}`
- `DELETE /api/v1/inventory/products/{productId}`
- `PATCH /api/v1/inventory/products/{productId}/stock`
- `GET /api/v1/inventory/products/below-reorder-point`

### Receiving

- `POST /api/v1/receiving/receipts`
- `POST /api/v1/receiving/receipts/{receiptId}/lots`

### Dispatch

- `POST /api/v1/dispatch/orders`
- `POST /api/v1/dispatch/orders/{dispatchOrderId}/pick-fefo`
- `POST /api/v1/dispatch/orders/{dispatchOrderId}/confirm`

### Reporting

- `GET /api/v1/reporting/inventory-metrics`
- `GET /api/v1/reporting/summary`
- `GET /api/v1/reporting/alerts`
- `GET /api/v1/reporting/warehouse-utilization`
- `GET /api/v1/reporting/service-level?from=YYYY-MM-DD&to=YYYY-MM-DD&category=<cat>&zone=<prefix>`
- `GET /api/v1/reporting/inventory-rotation`
- `GET /api/v1/reporting/accuracy`
- `GET /api/v1/reporting/inventory-metrics/export/pdf?from=YYYY-MM-DD&to=YYYY-MM-DD&category=<cat>&zone=<prefix>`
- `GET /api/v1/reporting/inventory-metrics/export/excel?from=YYYY-MM-DD&to=YYYY-MM-DD&category=<cat>&zone=<prefix>`

## Comandos por módulo (base)

### Auth

```bash
php artisan migrate --path=app/Modules/Auth/Database/Migrations
php artisan db:seed --class="Modules\\Auth\\Database\\Seeders\\AuthRolesSeeder"
```

### Inventory

```bash
php artisan migrate --path=app/Modules/Inventory/Database/Migrations
php artisan db:seed --class="Modules\\Inventory\\Database\\Seeders\\InventorySeeder"
```

## Pruebas y calidad

```bash
php artisan migrate:fresh --seed
./vendor/bin/pest
./vendor/bin/pint --test
./vendor/bin/phpstan analyse app
```

## Pruebas de aceptación (demo MVP)

Escenarios E2E implementados en `tests/Acceptance/MvpFlowAcceptanceTest.php`:

- login + `/auth/me`
- flujo inventory (registro + ajuste)
- flujo receiving (evento cross-module)
- flujo dispatch FEFO (pick + confirm)
- reporting + export PDF/Excel
- seguridad por rol + errores de negocio

Ejecutar solo aceptación:

```bash
./vendor/bin/pest tests/Acceptance --group=acceptance
```

Checklist de demo en un solo comando:

```bash
composer demo:ready
```

Checklist completo pre-entrega (suite completa):

```bash
composer release:check
```

## Swagger / OpenAPI

Generar documentación:

```bash
php artisan l5-swagger:generate
```

Ver UI:

- `http://127.0.0.1:8000/api/documentation`

Archivo generado:

- `storage/api-docs/api-docs.yaml`
- `openapi.yaml` (copia versionada en raíz)

Guías funcionales:

- `docs/funcionalidad_api.md`
- `docs/trazabilidad_guia_nuclear_v.md`

Colección Postman MVP:

- `docs/postman/Stockflow_MVP.postman_collection.json`
- `docs/postman/Stockflow_MVP.postman_environment.json`

## Exportación PDF/Excel

Dependencias incluidas:

- `barryvdh/laravel-dompdf`
- `maatwebsite/excel`

Nota de entorno local:

- `maatwebsite/excel` requiere `ext-gd` habilitada en PHP para compatibilidad completa.
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
