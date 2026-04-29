# ADR-006: RBAC propio vs Spatie

- Estado: Aprobado (fase actual)
- Fecha: 2026-04-28

## Contexto

Se requiere RBAC funcional para Auth con evidencia arquitectónica clara.

## Decisión

Implementar RBAC propio en fase actual y dejar ruta de migración a Spatie para futura estandarización.

## Justificación

- Permite demostrar diseño y trazabilidad en evaluación académica.
- Evita sobredependencia temprana durante construcción de módulos base.

## Consecuencias

- Mayor responsabilidad de mantenimiento en tablas y reglas RBAC.
