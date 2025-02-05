<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta realizada</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form method="post" action="{{route('alta_usuario')}}">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br>
        
        <label for="aps">Apellidos:</label>
        <input type="text" name="aps" id="aps"><br>
        <label for="telf">Teléfono:</label>
        <input type="tel" name="telf" id="telf"><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>