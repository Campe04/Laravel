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
            <th>DNI</th>
            <th>MEDIA</th>
            <th>EQUIPO</th>
        </tr>
        @foreach ($alumnos as $a)
        <tr>
            <td>{{$a->nombre}}</td>
            <td>{{$a->dni}}</td>
            <td>{{$a->media}}</td>
            <td>{{$a->equipo->nombre}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>