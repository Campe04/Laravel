<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        @foreach ($products as $p)
            <tr>
                <td>{{$p->nombre}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->precio}}</td>
                <td>{{$p->stock}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>