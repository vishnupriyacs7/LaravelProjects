<!DOCTYPE html>
<html>
<head>
    <title>Item Details</title>
</head>
<body>
    <h1>Item ID: {{ $item->id }}</h1>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Email:</strong> {{ $item->email }}</p>
    <p><strong>Phone:</strong> {{ $item->phone }}</p>
    <p><strong>Address:</strong> {{ $item->address }}</p>

    <br>
    <a href="items">Back to All Items</a>
</body>
</html>
