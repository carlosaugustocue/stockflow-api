# Prompt Cursor — Backend API Monolito Modular (Laravel 13)

> Guarda este archivo como `.cursorrules` en la raíz del repo, o pégalo como primer mensaje del chat de Cursor. Está pensado para producir código real en una primera ronda y luego iterar con prompts focalizados por módulo.

---

## Rol

Actúa como ingeniero senior Laravel especializado en monolitos modulares pragmáticos. **No aplicas DDD/Clean Architecture en su forma pura** — calibras al alcance. Para un MVP académico de 10 semanas, el objetivo es código mantenible, testeable y evaluable contra SOLID/KISS/DRY/YAGNI, no un manual de Eric Evans.

Si una capa de abstracción no se justifica con un beneficio concreto en el alcance del MVP, la omites.

---

## Qué se construye

Backend **REST API stateless** que alimentará una SPA externa (Vue). Tú no implementas frontend. El consumo público es solo HTTP/JSON con autenticación Bearer.

Dominio: gestión de inventario y logística para centros de distribución. Casos de uso clave: registrar productos, recibir mercancía con lotes, despachar pedidos con FEFO, generar indicadores y alertas.

---

## Contexto evaluativo (afecta decisiones de código)

- Proyecto académico: Seminario Nuclear V, CUE, I-2026, 3 cortes (30/30/40).
- Asignaturas que evaluarán este código: Arquitectura de Software I, Programación Web, Pruebas de Software.
- Lo que se mira específicamente:
  - **Corte 1**: arquitectura documentada (ADRs), Auth + RBAC funcional, plan de pruebas, matriz trazabilidad.
  - **Corte 2**: módulos Inventario/Recepción/Despacho funcionales, KISS/DRY/YAGNI verificable, escenarios de calidad, cobertura unit + integración.
  - **Corte 3**: indicadores + alertas, Swagger obligatorio, SOLID verificado, deuda técnica reportada, pruebas funcionales/aceptación.

Implicaciones: el código tiene que **mostrar las decisiones**, no esconderlas. ADRs en `docs/adr/`, comentarios `@architectural-decision` en código clave, tests legibles, controllers triviales.

---

## Stack obligatorio

- **Laravel 13**, PHP 8.3+
- **MySQL 8**
- **Sanctum** para autenticación SPA (Bearer tokens)
- **Pest** para tests (no PHPUnit puro)
- **L5-Swagger** para OpenAPI
- **Spatie laravel-permission** para RBAC, *o* implementación propia (decide en ADR — rolling-own puede demostrar mejor el dominio arquitectónico para la evaluación)
- **Larastan** nivel 6 mínimo
- **Pint** + PSR-12

No introduzcas otras dependencias sin justificar en ADR.

---

## Arquitectura: monolito modular pragmático

### Módulos (bounded contexts)

| Módulo | Responsabilidad |
|---|---|
| `Auth` | Autenticación, usuarios, roles, permisos |
| `Inventory` | Productos, categorías, lotes, ubicaciones, niveles de stock |
| `Receiving` | Entradas de mercancía, asociación a lotes |
| `Dispatch` | Pedidos salientes, picking FEFO, validación de disponibilidad |
| `Reporting` | Indicadores agregados, exportación PDF/Excel |
| `Shared` | Kernel transversal: VOs comunes, base classes, exceptions, contracts |

`Shared` solo recibe lo que >1 módulo usa **hoy**, no lo que "podría compartirse".

### Capas dentro de cada módulo (calibradas)

```
app/Modules/<NombreModulo>/
├── Domain/              # Entidades, VOs, eventos, invariantes. Sin Eloquent.
├── Application/         # Casos de uso (Action classes), DTOs.
├── Infrastructure/      # Eloquent models, repositorios concretos, listeners.
├── Http/
│   ├── Controllers/     # Triviales: reciben request → llaman action → devuelven resource.
│   ├── Requests/        # FormRequests con validación.
│   └── Resources/       # Transformers de salida.
├── Database/
│   ├── Migrations/
│   ├── Factories/
│   └── Seeders/
├── Tests/
│   ├── Unit/
│   └── Feature/
├── routes.php
└── <Modulo>ServiceProvider.php
```

### Reglas de módulo (estrictas)

1. **Cero llamadas directas entre módulos.** `Receiving` no instancia ni inyecta clases de `Inventory`. Comunicación = eventos del dominio + listeners. Excepción permitida: lectura via casos de uso públicamente expuestos en `Application/PublicApi/`.
2. Cada módulo registra sus migraciones, rutas, listeners, comandos en su propio Service Provider.
3. `config/modules.php` lista módulos activos. `AppServiceProvider` los registra en bucle.
4. Migraciones por módulo en `app/Modules/<X>/Database/Migrations/`, no en `database/migrations/`.

### Lo que NO se aplica (anti-overengineering)

- Repositorios genéricos `BaseRepository<T>`. Si necesitas repo, escríbelo concreto: `EloquentProductRepository`.
- Interfaces sin segunda implementación real prevista en el alcance.
- Value Objects para todo. Solo donde hay invariante real: `Sku`, `LotNumber`, `Quantity`, `ReorderPoint`. NO `ProductName extends StringValue`.
- Hexagonal puro (puertos/adaptadores formales). El módulo es la unidad de aislamiento, no el puerto.
- Mappers entre Eloquent y entidades del dominio si la entidad es básicamente un wrapper. **Excepción**: agregados con invariantes (ej. `StockLevel` con regla "no puede ser negativo").
- CQRS. Lectura y escritura van por el mismo camino.

---

## Convenciones API

- **Versionado**: `/api/v1/...`. Versión en URL, no en header.
- **Respuesta éxito**: `{"data": ..., "meta": ...}`. Resources de Laravel.
- **Respuesta error**: `{"message": "...", "errors": {...}, "code": "..."}`.
- **Status codes**: 200/201/204/400/401/403/404/409/422/500. Nada de "todo 200".
- **Paginación**: cursor para listados grandes (productos, movimientos), offset para listados pequeños (categorías, ubicaciones).
- **Filtrado**: query params estandarizados. Si usas `spatie/laravel-query-builder`, justifícalo en ADR; si no, helpers propios en `Shared/Http/Filters/`.
- **Autenticación**: Sanctum con **Personal Access Tokens (Bearer)**; no usar flujo cookie/session para SPA en este proyecto.
- Endpoints de auth: `POST /api/v1/auth/login`, `POST /api/v1/auth/logout`, `GET /api/v1/auth/me`.
- **Documentación**: anotaciones OpenAPI en controllers + `php artisan l5-swagger:generate`. El `openapi.yaml` se commitea.

---

## Convenciones de código

- `declare(strict_types=1);` en todos los archivos.
- `readonly` properties en VOs y DTOs.
- Enum nativos PHP 8.3 para estados, roles, tipos de movimiento.
- **Form Requests obligatorios** — cero validación en controllers.
- **API Resources obligatorios** — cero `return $model;` en controllers.
- **Action classes** (`__invoke`) en lugar de "service grande con 30 métodos".
- **Eventos del dominio** para side-effects entre módulos: `MerchandiseReceived`, `StockAdjusted`, `ReorderPointReached`.
- Comentarios solo donde la decisión no es evidente. Cero comentarios obvios.

---

## Testing

- **Pirámide objetivo**: ~70% unit (Domain + Application), ~25% feature (HTTP + DB), ~5% integración cross-module via eventos.
- **Cobertura mínima**: 70% global, **90% en `Domain/`**.
- Tests organizados por módulo: `app/Modules/<X>/Tests/`.
- Factories en `app/Modules/<X>/Database/Factories/`.
- `RefreshDatabase` en feature tests.
- Pruebas de aceptación (Corte 3) → suite separada `tests/Acceptance/` ejecutada con tag Pest.

---

## Lista negra (lo que rompe la rúbrica)

| Antipattern | Por qué |
|---|---|
| Lógica de negocio en controllers | Viola SRP |
| Eloquent en `Domain/` | Acopla dominio a infra |
| Fat models (>200 líneas, lógica de negocio) | Viola SRP |
| `app(SomeService::class)` cross-module | Viola encapsulamiento de módulo |
| Validación duplicada en controller + request | DRY |
| Interface sin segunda impl | YAGNI |
| `Service` con 30 métodos públicos | Usa Actions |
| `try/catch` que se traga excepciones | Pierde trazabilidad |
| Lógica en `Model::booted()` | Difícil de testear |
| `DB::raw` con SQL crudo sin justificación | Mantenibilidad |
| Migrate en producción que no es reversible | Sin justificar |

---

## Salida esperada (fase 1 — este prompt)

Genera en una sola ronda:

1. **Estructura completa de carpetas** con todos los archivos vacíos para los 6 módulos.
2. `config/modules.php` + registro dinámico en `AppServiceProvider` (compatible Laravel 13).
3. `BaseModuleServiceProvider` en `Shared/`.
4. **Módulo `Auth` implementado completo**:
   - Migración `users` ajustada + `roles`, `permissions` (o uso de `spatie/laravel-permission`).
   - Seeder con los 4 roles: `admin`, `warehouse_manager`, `receiving_operator`, `dispatch_operator`.
   - Endpoints: login, logout, me.
   - Tests Pest unit + feature.
   - Anotaciones OpenAPI.
5. **Módulo `Inventory` implementado completo como referencia canónica**:
   - Entidades dominio: `Product`, `Lot`, `Location`, `StockLevel`.
   - VOs: `Sku`, `LotNumber`, `Quantity`, `ReorderPoint`.
   - Eventos: `ProductRegistered`, `StockAdjusted`, `ReorderPointReached`.
   - Casos de uso: `RegisterProduct`, `AdjustStock`, `GetProductStock`, `ListProductsBelowReorderPoint`.
   - Migraciones + factories + seeders sintéticos.
   - Eloquent models + repositorios concretos donde aplique.
   - Controllers + Requests + Resources.
   - Tests Pest: unit (VOs, entidades, casos de uso) + feature (endpoints).
   - Anotaciones OpenAPI.
6. `README.md` con: setup, comandos artisan custom por módulo, cómo correr tests con cobertura, cómo regenerar Swagger.
7. `docs/adr/` con índice + 3 ADRs ya redactadas:
   - ADR-001: Sanctum vs JWT
   - ADR-002: Modular monolith con módulos en `app/Modules/` (vs. paquetes Composer locales)
   - ADR-003: Comunicación entre módulos via eventos del dominio

**Nada queda con `// TODO` ni stubs en los dos módulos implementados.** El resto de módulos (`Receiving`, `Dispatch`, `Reporting`, `Shared`) puede quedar con archivos esqueleto vacíos — se completarán en prompts posteriores.

---

## Iteración posterior (referencia)

Después de validar la fase 1, los siguientes prompts focalizados serán:

- "Implementa módulo `Receiving` siguiendo el patrón canónico de `Inventory`. Casos de uso: `RegisterReceipt`, `LinkLotToReceipt`. Emite `MerchandiseReceived`."
- "Implementa módulo `Dispatch`. Casos de uso: `CreateDispatchOrder`, `PickStockUsingFEFO`, `ConfirmDispatch`. Validación de disponibilidad antes de descontar."
- "Implementa módulo `Reporting`. Indicadores: rotación de inventario por categoría, nivel de servicio, utilización de almacén. Listener de `StockAdjusted` que actualiza tabla materializada `inventory_metrics`."
- "Implementa exportación PDF/Excel en `Reporting` usando barryvdh/laravel-dompdf y maatwebsite/excel."
- "Genera ADRs 004-008 para: cache, real-time, RBAC propio vs Spatie, despliegue, paginación cursor."
- "Aumenta cobertura del módulo `Inventory` hasta 90% en `Domain/`."

---

## Restricciones de salida

- Código completo, sin placeholders en módulos marcados como "implementados".
- Migraciones reversibles (`down()` real).
- Tests que pasan en una corrida limpia (`php artisan migrate:fresh --seed && pest`).
- Calidad estática sin errores (`./vendor/bin/pint --test` y `./vendor/bin/phpstan analyse` o `./vendor/bin/larastan analyse` según configuración).
- PSR-12 + Pint config.
- Si una decisión no es trivial y no tiene ADR todavía, agrega `@architectural-decision: pending ADR` como comentario y lístala al final de tu salida.

---

## Supuestos que puedes hacer (sin preguntar)

- Volumen MVP: ~5.000 SKUs, ~50.000 movimientos/mes, ~10 usuarios concurrentes. Diseña para eso, no para Amazon.
- Un solo CD por instancia del sistema (multi-tenant fuera de alcance).
- Datos iniciales: factories Laravel con Faker, no datos reales del CD.
- Zona horaria: `America/Bogota`.
- Idioma de mensajes API: español, con `lang/es/`.
