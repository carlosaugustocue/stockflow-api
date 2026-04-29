# ADR-003: Comunicación entre módulos vía eventos

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Los módulos necesitan reaccionar a cambios de otros dominios (por ejemplo, ajustes de stock) sin introducir dependencias directas entre capas de aplicación.

## Decisión

La comunicación entre módulos se realiza vía **eventos de dominio** (ej. `StockAdjusted`, `ReorderPointReached`), con listeners en módulos consumidores.

## Justificación

- Reduce acoplamiento y dependencia de implementaciones internas.
- Facilita pruebas de integración orientadas a comportamiento.
- Prepara el sistema para futuras proyecciones/reportes sin romper contratos.

## Consecuencias

- Requiere gobernanza de nombres/versionado de eventos.
- Algunas rutas de ejecución pasan a ser eventualmente consistentes.
