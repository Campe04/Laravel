<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta realizada</title>
</head>
<body>
    <h1>Se ha realizado el alta con éxito</h1>
    @if($nombre=='Pepe')
        <h1>Hola PEPE</h1>
        {{session()->get('nombre')}}
    @else
    <ul>
        <li>Nombre: {{$nombre}}</li>
        <li>Apellidos: {{$apellidos}}</li>
        <li>Teléfono: {{$telefono}}</li>
    </ul>
    @endif
</body>
</html>