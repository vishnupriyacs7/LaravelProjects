<!DOCTYPE html>
<html>
<head>
    <title>All Items</title>
</head>
<body>
    <h1>All Items</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->address }}</td>

            </tr>
        @endforeach
    </table>

    <br>
    <a href="/">Back to Home</a>
</body>
</html>
