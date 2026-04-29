# ADR-008: Paginación cursor en listados grandes

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Productos y movimientos crecerán de forma continua y offset pagination se degrada en páginas altas.

## Decisión

Usar cursor pagination para listados grandes (`Inventory products`) y reservar offset para catálogos pequeños.

## Justificación

- Mejor rendimiento en lecturas secuenciales.
- Menor riesgo de inconsistencias por inserciones concurrentes.

## Consecuencias

- El cliente debe manejar tokens de cursor en lugar de número de página.
