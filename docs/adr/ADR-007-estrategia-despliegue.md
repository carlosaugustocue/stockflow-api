# ADR-007: Estrategia de despliegue

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Se necesita una estrategia de despliegue simple, repetible y compatible con monolito modular.

## Decisión

Despliegue como aplicación única Laravel (build + migrate + cache warmup) en entorno Linux con base MySQL 8 administrada.

## Justificación

- Menor costo operativo para equipo académico.
- Facilita rollback por versión de release única.

## Consecuencias

- Escalado horizontal se aplica a todo el monolito, no por módulo aislado.
