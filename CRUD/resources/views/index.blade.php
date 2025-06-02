<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    <h1>Task Manager</h1>

    <!-- View All Tasks -->
    <a href="{{ url('/tasks') }}">
        <button>View All Tasks</button>
    </a>

    <!-- View Single Task (example: task with ID 1) -->
    <form method="GET" action="{{ url('/tasks/1') }}">
        <button>View Task ID 1</button>
    </form>

    <!-- Create New Task -->
    <form method="POST" action="{{ url('/tasks') }}">
        @csrf
        <input type="text" name="title" placeholder="Task title" required>
        <input type="text" name="description" placeholder="Task description" required>
        <button type="submit">Create Task</button>
    </form>

    <!-- Update Task (example: task with ID 1) -->
    <form method="POST" action="{{ url('/tasks/1') }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="Updated title">
        <input type="text" name="description" value="Updated description">
        <button type="submit">Update Task ID 1</button>
    </form>

    <!-- Delete Task (example: task with ID 1) -->
    <form method="POST" action="{{ url('/tasks/1') }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this task?')">Delete Task ID 1</button>
    </form>

</body>
</html>
