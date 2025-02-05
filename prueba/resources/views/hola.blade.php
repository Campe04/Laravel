<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 1</title>
</head>
<body>
    <h1>Hola {{$nombre}} tiene {{strlen($nombre)}} letras!</h1>
    <a href="{{route('info')}}">Información acerca de Laravel</a>
</body>
</html>