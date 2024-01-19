<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tren</title>
</head>
<body>
    <h1>Información del tren</h1>
    <p>Nombre: <b>{{ $train -> name }}</b></p>
    <p>Tipo: <b>{{ $train -> trainType -> type }}</b></p>
    <p>Pasajeros: <b>{{ $train -> passengers }}</b></p>
    <p>Año de fabricación: <b>{{ $train -> year }}</b></p>
</body>
</html>