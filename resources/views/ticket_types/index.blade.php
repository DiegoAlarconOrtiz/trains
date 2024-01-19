<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de ticket</title>
</head>
<body>
    @foreach ($ticket_types as $ticket_type)
        <li>Tipo: <b>{{ $ticket_type -> type }}</b></li>
        <form action="{{ route('ticket_types.show', ['ticket_type' => $ticket_type->id]) }}" method="get">
            <input type="submit" value="Ver">
        </form>
    
        <form action="{{ route('ticket_types.edit', ['ticket_type' => $ticket_type->id]) }}" method="get">
            <input type="submit" value="Editar">
        </form>
    
        <form action="{{ route('ticket_types.destroy', ['ticket_type' => $ticket_type->id]) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Borrar">
        </form>
        <br>
    @endforeach
    <h2><a href="{{ URL::route('ticket_types.create') }}">Crear ticket</a></h2>
    <h2><a href="/">Menú principal</a></h2>
</body>
</html>