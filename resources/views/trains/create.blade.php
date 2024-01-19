<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo tren</title>
</head>
<body>
    <h1>Crear tren</h1>
    <form action="{{ route('trains.store') }}" method="post">
        @csrf 
        <label>Name: </label>
        <input type="text" name="name"><br><br>
        <label>Passengers: </label>
        <input type="text" name="passengers"><br><br>
        <label>Year: </label>
        <input type="text" name="year"><br><br>
        <label>Train type: </label>
        <select name="train_type_id">
            @foreach ($train_types as $train_type)
                <option value="{{ $train_type -> id }}">{{ $train_type -> type }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>