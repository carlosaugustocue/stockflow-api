# ADR-002: Monolito modular en app/Modules

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Se requiere separar dominios funcionales (Auth, Inventory, Receiving, Dispatch, Reporting) manteniendo despliegue y operación simples para un equipo académico.

## Decisión

Se adopta **monolito modular** con módulos en `app/Modules/<Modulo>` registrados por `config/modules.php` y cargados desde `AppServiceProvider`.

## Justificación

- Aislamiento por módulo sin costo operativo de microservicios.
- Estructura clara para evaluar arquitectura, pruebas y mantenibilidad.
- Permite iteraciones por módulo sin romper un runtime único.

## Consecuencias

- Disciplina necesaria para evitar acoplamiento directo entre módulos.
- Comunicación cross-module debe pasar por eventos o API interna explícita.
