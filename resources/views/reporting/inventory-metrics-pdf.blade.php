<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Reporte de métricas de inventario</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #444; padding: 6px; text-align: left; }
        th { background: #efefef; }
    </style>
</head>
<body>
<h2>Reporte de métricas de inventario</h2>
<p>Generado: {{ now()->toDateTimeString() }}</p>
<table>
    <thead>
    <tr>
        <th>Producto</th>
        <th>SKU</th>
        <th>Stock actual</th>
        <th>Punto reorden</th>
        <th>Brecha stock</th>
    </tr>
    </thead>
    <tbody>
    @foreach($metrics as $metric)
        <tr>
            <td>{{ $metric->product_name }}</td>
            <td>{{ $metric->sku }}</td>
            <td>{{ $metric->current_stock }}</td>
            <td>{{ $metric->reorder_point }}</td>
            <td>{{ $metric->stock_gap }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
