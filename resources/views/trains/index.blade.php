<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trenes</title>
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
        <thead><caption>Trenes</caption></thead>
        <tbody>
            <tr>
                <td>Tren</td>
                <td>Capacidad</td>
                <td>Fabricación</td>
                <td>Tipo tren</td>
                <td>Info</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train -> name }}</td>
                <td>{{ $train -> passengers }}</td>
                <td>{{ $train -> year }}</td>
                <td>{{ $train -> trainType -> type }}</td>
                <td>
                    <form action="{{ route('trains.show', ['train' => $train->id]) }}" method="get">
                        <input type="submit" value="Ver">
                    </form>
                </td>
                <td>
                    <form action="{{ route('trains.edit', ['train' => $train->id]) }}" method="get">
                        <input type="submit" value="Editar">
                    </form>
                </td>
                <td>
                    <form action="{{ route('trains.destroy', ['train' => $train->id]) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2><a href="{{ URL::route('trains.create') }}">Crear tren</a></h2>
    <h2><a href="/">Menú principal</a></h2>
</body>
</html>