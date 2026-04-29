# Funcionalidad de la API (guía funcional)

Este documento describe qué hace cada módulo de la API, cuándo usar cada endpoint y
qué flujo funcional seguir en el MVP.

Base URL: `http://127.0.0.1:8000/api/v1`

---

## 1) Auth

### Objetivo
Gestionar autenticación por token y obtener el contexto del usuario autenticado.

### Endpoints
- `POST /auth/login`
- `POST /auth/logout`
- `GET /auth/me`

### Flujo funcional
1. El cliente envía credenciales a `login`.
2. El backend retorna token Bearer.
3. El cliente usa el token en `Authorization: Bearer <token>` para consumir módulos protegidos.
4. `logout` revoca el token actual.

---

## 2) Inventory

### Objetivo
Administrar catálogo, stock y puntos de reorden de productos.

### Endpoints
- `GET /inventory/products`
- `POST /inventory/products`
- `GET /inventory/products/{productId}`
- `PATCH /inventory/products/{productId}`
- `DELETE /inventory/products/{productId}`
- `PATCH /inventory/products/{productId}/stock`
- `GET /inventory/products/below-reorder-point`

### Funcionalidad clave
- Registro, consulta, actualización y baja de productos.
- Ajuste de stock con validación de no-negatividad.
- Detección de productos bajo punto de reorden.
- Soporte de categoría para segmentar reportes.

---

## 3) Receiving

### Objetivo
Registrar recepciones de mercancía y asociar lotes entrantes.

### Endpoints
- `POST /receiving/receipts`
- `POST /receiving/receipts/{receiptId}/lots`

### Funcionalidad clave
- Crea cabecera de recepción (`receipt`).
- Vincula lotes con vencimiento y cantidad.
- Emite evento de dominio para sincronizar inventario.

---

## 4) Dispatch

### Objetivo
Gestionar pedidos salientes y salida de stock con criterio FEFO.

### Endpoints
- `POST /dispatch/orders`
- `POST /dispatch/orders/{dispatchOrderId}/pick-fefo`
- `POST /dispatch/orders/{dispatchOrderId}/confirm`

### Funcionalidad clave
- Crea orden de despacho solo si hay stock suficiente.
- Realiza picking FEFO (primero expira, primero sale).
- Confirma despacho y descuenta lotes + stock global.
- Registra fechas esperadas/confirmadas para nivel de servicio.

---

## 5) Reporting

### Objetivo
Exponer indicadores operativos, alertas y exportaciones gerenciales.

### Endpoints
- `GET /reporting/inventory-metrics`
- `GET /reporting/summary`
- `GET /reporting/alerts`
- `GET /reporting/warehouse-utilization`
- `GET /reporting/service-level?from=YYYY-MM-DD&to=YYYY-MM-DD&category=<cat>&zone=<prefix>`
- `GET /reporting/inventory-rotation`
- `GET /reporting/inventory-metrics/export/pdf`
- `GET /reporting/inventory-metrics/export/excel`

### Funcionalidad clave
- Métricas de inventario materializadas y actualizadas por eventos.
- Alertas operativas: vencimiento, stock bajo, despachos pendientes.
- Utilización por ubicación.
- Nivel de servicio por completitud/puntualidad con filtros.
- Rotación por categoría con tendencia básica.
- Exportación de reportes en PDF y Excel.

---

## 6) Seguridad por roles

Acceso por módulo (middleware `auth:sanctum` + `role`):
- Inventory: `admin`, `warehouse_manager`
- Receiving: `admin`, `warehouse_manager`, `receiving_operator`
- Dispatch: `admin`, `warehouse_manager`, `dispatch_operator`
- Reporting: `admin`, `warehouse_manager`

---

## 7) Contrato de errores API

Formato uniforme:

```json
{
  "message": "Descripción legible",
  "errors": {},
  "code": "CODIGO_ESTANDAR"
}
```

Códigos comunes:
- `VALIDATION_ERROR` (422)
- `AUTH_UNAUTHENTICATED` (401)
- `AUTH_FORBIDDEN` (403)
- `HTTP_404` o `RESOURCE_NOT_FOUND` (404)
- `BUSINESS_RULE_VIOLATION` (409)
- `INTERNAL_ERROR` (500)

---

## 8) Flujo recomendado de demostración

1. Login
2. Crear producto y ajustar stock
3. Registrar recepción + asociar lote
4. Crear despacho + pick FEFO + confirm
5. Consultar summary, alerts, service-level, inventory-rotation
6. Exportar PDF/Excel
