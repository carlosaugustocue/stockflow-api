# ADR-005: Real-time diferido

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

Se evaluó exponer cambios de stock en tiempo real vía WebSockets.

## Decisión

No implementar real-time push en esta fase. Se adopta actualización diferida por polling de API y eventos internos para consistencia del backend.

## Justificación

- Mantiene foco en objetivos académicos principales.
- Reduce complejidad operativa y de pruebas de aceptación.

## Consecuencias

- La UI no tendrá notificación instantánea de cambios.
