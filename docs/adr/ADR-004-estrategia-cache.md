# ADR-004: Estrategia de cache

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Los indicadores y listados de reporting pueden crecer y degradar tiempos de respuesta.

## Decisión

Usar cache a nivel de consultas de reporting con TTL corto (60-120 segundos) y invalidación por eventos de inventario críticos.

## Justificación

- Reduce carga en base de datos sin perder frescura para un MVP.
- Mantiene implementación simple y trazable para evaluación.

## Consecuencias

- Posible lectura levemente desfasada dentro de la ventana TTL.
