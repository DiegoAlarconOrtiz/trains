<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar ticket</title>
</head>
<body>
    <h1>Editar ticket</h1>
    <form action="{{ route('tickets.update', ['ticket' => $ticket -> id]) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <label>Date: </label>
        <input type="date" name="date" value="{{ $ticket -> date }}"><br><br>
        <label>Price: </label>
        <input type="number" name="price" value="{{ $ticket -> price }}"><br><br>
        <label>Train: </label>
        <select name="train_id">
            @foreach ($trains as $train)
                @if ($train -> id != $ticket -> train_id)
                    <option value="{{ $train -> id }}">{{ $train -> name }}</option>
                @else
                    <option selected value="{{ $train -> id }}">{{ $train -> name }}</option>
                @endif 
            @endforeach
        </select><br><br>
        <label>Ticket type: </label>
        <select name="ticket_type_id">
            @foreach ($ticket_types as $ticket_type)
                @if ($ticket_type -> id != $ticket -> ticket_type_id)
                    <option value="{{ $ticket_type -> id }}">{{ $ticket_type -> type }}</option>
                @else
                    <option selected value="{{ $ticket_type -> id }}">{{ $ticket_type -> type }}</option>
                @endif 
            @endforeach
        </select><br><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>