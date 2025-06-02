<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>

    <h1>Edit Item</h1>

    <form action="{{ url('/items/' . $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $item->email }}" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $item->phone }}" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required>{{ $item->address }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/items">Back to Items</a>

</body>
</html>
