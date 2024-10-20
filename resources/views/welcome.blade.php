<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Link to External CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="container">
        <h1>Todo List</h1>

        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <form action="{{ route('todo.save') }}" method="POST">
            @csrf
            <input type="text" name="listItem" placeholder="Add new task" required>
            <button type="submit">Add Task</button>
        </form>

        <h2>Tasks</h2>
        <ul>
            @foreach($ListItems as $item)
                <li class="{{ $item->is_complete ? 'completed' : '' }}">
                    {{ $item->name }}

                    <div class="task-actions">
                        <!-- Complete/Incomplete Button -->
                        <form action="{{ route('todo.toggle', $item->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="complete">{{ $item->is_complete ? 'Incomplete' : 'Complete' }}</button>
                        </form>

                        <!-- Edit Button -->
                        <a href="{{ route('todo.edit', $item->id) }}">Edit</a>

                        <!-- Delete Button -->
                        <form action="{{ route('todo.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
