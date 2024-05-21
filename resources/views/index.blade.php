<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Todo List</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>

    <ul class="list-group">
        @foreach($tasks as $task)
            <li class="list-group-item">
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
