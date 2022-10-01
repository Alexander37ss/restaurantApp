<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
</head>
<style>
    h1{
    color: blue;
    }
</style>
<body>
    <h1>Hola Mundo</h1>
    Mi nombre es: {{$nombre}}
    <ul>
        @foreach($peliculas as $p)

        <li>{{$p}}</li>

        @endforeach
    </ul>
    <ul>
        @foreach($numeros as $n)

        <li>{{$n}}</li>
        
        @endforeach
    </ul>
</body>
</html>