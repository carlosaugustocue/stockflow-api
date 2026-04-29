# Trazabilidad funcional — Guía Nuclear V

Este documento relaciona los requerimientos funcionales principales de la guía
`guia_nuclear_V_inventario_logistica.pdf` con su implementación actual en el backend.

## 1) Gestión de inventario

- **Requerimiento guía**: registro, consulta, actualización y baja de productos; control de lotes; puntos de reorden; alertas de stock mínimo.
- **Estado**: Implementado.
- **Evidencia técnica**:
  - `POST /api/v1/inventory/products`
  - `GET /api/v1/inventory/products`
  - `GET /api/v1/inventory/products/{productId}`
  - `PATCH /api/v1/inventory/products/{productId}`
  - `DELETE /api/v1/inventory/products/{productId}`
  - `PATCH /api/v1/inventory/products/{productId}/stock`
  - `GET /api/v1/inventory/products/below-reorder-point`

## 2) Recepción y despacho

- **Requerimiento guía**: registrar entradas y salidas, mantener stock al día, trazabilidad en operaciones de bodega.
- **Estado**: Implementado.
- **Evidencia técnica**:
  - Recepción:
    - `POST /api/v1/receiving/receipts`
    - `POST /api/v1/receiving/receipts/{receiptId}/lots`
  - Despacho:
    - `POST /api/v1/dispatch/orders`
    - `POST /api/v1/dispatch/orders/{dispatchOrderId}/pick-fefo`
    - `POST /api/v1/dispatch/orders/{dispatchOrderId}/confirm`
  - Integración cross-module vía eventos (`MerchandiseReceived`, `StockAdjusted`).

## 3) Indicadores y reportes

- **Requerimiento guía**: dashboard de KPI (rotación, nivel de servicio, utilización), alertas operativas y exportación PDF/Excel.
- **Estado**: Implementado (MVP con proxies operativos y filtros base).
- **Evidencia técnica**:
  - Indicadores:
    - `GET /api/v1/reporting/summary`
    - `GET /api/v1/reporting/inventory-rotation`
    - `GET /api/v1/reporting/service-level?from=YYYY-MM-DD&to=YYYY-MM-DD&category=<cat>&zone=<prefix>`
    - `GET /api/v1/reporting/warehouse-utilization`
  - Alertas:
    - `GET /api/v1/reporting/alerts`
      - productos próximos a vencer
      - stock bajo punto de reorden
      - pedidos pendientes de despacho
  - Exportación:
    - `GET /api/v1/reporting/inventory-metrics/export/pdf`
    - `GET /api/v1/reporting/inventory-metrics/export/excel`

## 4) Autenticación y roles

- **Requerimiento guía**: autenticación + roles (admin, jefe de almacén, operador recepción, operador despacho).
- **Estado**: Implementado.
- **Evidencia técnica**:
  - `POST /api/v1/auth/login`
  - `POST /api/v1/auth/logout`
  - `GET /api/v1/auth/me`
  - Middleware de acceso por rol en módulos operativos.

## 5) Pruebas y calidad

- **Requerimiento guía**: pruebas unitarias, integración, funcionales/aceptación; documentación de API.
- **Estado**: Implementado para MVP.
- **Evidencia técnica**:
  - Suite automatizada Pest (unit + feature + acceptance)
  - `tests/Acceptance/MvpFlowAcceptanceTest.php`
  - Swagger/OpenAPI disponible en `/api/documentation`
  - Checklist técnico:
    - `composer demo:ready`
    - `composer release:check`

## 6) Cobertura de entregables por corte (resumen)

- **Corte 1**:
  - arquitectura modular base
  - autenticación y RBAC
  - documentación ADR y OpenAPI
- **Corte 2**:
  - módulos inventario, recepción y despacho funcionales
  - pruebas unitarias/integración/feature
- **Corte 3**:
  - indicadores, alertas y exportación PDF/Excel
  - pruebas de aceptación automatizadas

## 7) Brechas y evolución sugerida post-MVP

- Integrar frontend/dashboard visual final con filtros avanzados.
- Fortalecer métricas de rotación con histórico temporal real.
- Afinar nivel de servicio con SLA por cliente/ruta y ventanas operativas.
- Expandir pruebas de rendimiento y seguridad en ambiente de staging.
