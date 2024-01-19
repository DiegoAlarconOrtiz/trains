<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
</head>
<body>
    <h1>Información del ticket</h1>
    <p>Fecha: <b>{{ $ticket -> date }}</b></p>
    <p>Precio: <b>{{ $ticket -> price }}€</b></p>
    <p>Tren: <b>{{ $ticket -> train -> name }}</b></p>
    <p>Tipo de ticket: <b>{{ $ticket -> ticketType -> type }}</b></p>
</body>
</html>