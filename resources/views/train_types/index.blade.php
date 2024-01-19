<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($train_types as $train_type)
        <li>Tipo: <b>{{ $train_type -> type }}</b></li>
        <form action="{{ route('train_types.show', ['train_type' => $train_type->id]) }}" method="get">
            <input type="submit" value="Ver">
        </form>
        
        <form action="{{ route('train_types.edit', ['train_type' => $train_type->id]) }}" method="get">
            <input type="submit" value="Editar">
        </form>
        
        <form action="{{ route('train_types.destroy', ['train_type' => $train_type->id]) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" value="Borrar">
        </form>
        <br>
    @endforeach
    <h2><a href="{{ URL::route('train_types.create') }}">Crear ticket</a></h2>
    <h2><a href="/">Menú principal</a></h2>
</body>
</html>