<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Tickets</title>
    <style>
        table, td, tr, caption {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        table {
            margin: 1rem;
        }

        td, tr, caption {
            padding: 0.5rem;
        }

        caption {
            background-color: rgb(180, 47, 129);
            color: whitesmoke;
        }

        tr {
            background-color: rgb(236, 233, 227);
        }
    </style>
</head>
<body>
    <table>
        <thead><caption>Tickets</caption></thead>
        <tbody>
            <tr>
                <td>Tipo ticket</td>
                <td>Fecha</td>
                <td>Precio</td>
                <td>Tipo tren</td>
                <td>Tren</td>
                <td>Info</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            @foreach ($tickets as $ticket)
            <tr>
                <td>{{ $ticket -> ticketType -> type }}</td>
                <td>{{ $ticket -> date }}</td>
                <td>{{ $ticket -> price }}€</td>
                <td>{{ $ticket -> train -> trainType -> type }}</td>
                <td>{{ $ticket -> train -> name }}</td>
                <td>
                    <form action="{{ route('tickets.show', ['ticket' => $ticket->id]) }}" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{ route('tickets.destroy', ['ticket' => $ticket->id]) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2><a href="{{ URL::route('tickets.create') }}">Crear ticket</a></h2>
    <h2><a href="/">Menú principal</a></h2>
</body>
</html>