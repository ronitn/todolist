<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo Item</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <div class="container"> <!-- Add container class -->
        <h1>Edit Todo Item</h1>

        <form action="{{ route('todo.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="listItem" value="{{ $item->name }}" required>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('todo.index') }}">Back to list</a>
    </div>
</body>
</html>
