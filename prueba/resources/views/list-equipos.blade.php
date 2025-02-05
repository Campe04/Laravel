<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Número de Alumnos</th>
        </tr>
        @foreach ($equipos as $e)
            <tr>
                <td>{{$e->nombre}}</td>
                <td>
                @foreach ($e->alumnos as $al)
                    {{$al->nombre}}<br>
                @endforeach
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>