<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar tren</title>
</head>
<body>
    <h1>Editar tren</h1>
    <form action="{{ route('trains.update', ['train' => $train -> id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Name: </label>
        <input type="text" name="name" value="{{ $train -> name }}"><br><br>
        <label>Passengers: </label>
        <input type="number" name="passengers" value="{{ $train -> passengers }}"><br><br>
        <label>Year: </label>
        <input type="number" name="year" value="{{ $train -> year }}"><br><br>
        <label>Train type: </label>
        <select name="train_type_id">
            @foreach ($train_types as $train_type)
                @if ($train_type -> id != $train -> train_type_id)
                    <option value="{{ $train_type -> id }}">{{ $train_type -> type }}</option>
                @else
                    <option selected value="{{ $train_type -> id }}">{{ $train_type -> type }}</option>
                @endif 
            @endforeach
        </select><br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>