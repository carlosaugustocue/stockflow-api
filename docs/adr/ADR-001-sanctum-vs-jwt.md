# ADR-001: Sanctum vs JWT

- Estado: Aprobado
- Fecha: 2026-04-28

## Contexto

El backend expone una API REST stateless para una SPA externa. Se requiere autenticación Bearer, revocación de sesiones y complejidad moderada para un MVP académico.

## Decisión

Se adopta **Laravel Sanctum con Personal Access Tokens (Bearer)** y no JWT en esta fase.

## Justificación

- Menor fricción de implementación y mantenimiento en Laravel 13.
- Revocación simple por token para logout/dispositivos.
- Ajustado al alcance del MVP sin introducir complejidad criptográfica adicional.

## Consecuencias

- Se evita gestión manual de refresh tokens y blacklists JWT.
- Escalamiento futuro a JWT sigue disponible si aparecen requisitos de federación externa.
