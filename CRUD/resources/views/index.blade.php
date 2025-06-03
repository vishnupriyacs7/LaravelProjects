<!DOCTYPE html>
<html>
<head>
    <title>CRUD operations - Home</title>
</head>
<body>

    <h1>CRUD OPERATIONS</h1>

    <ul>
        <li><a href="/items">View All Items</a></li>
        <li><a href="/items/3">View Item (ID 3)</a></li>
        <li><a href="/items-create">Create New Item </a></li>
        <li><a href="/items/2/edit">Edit Item (ID 2)</a></li>
        <form action="/items/3" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Item (ID 3)</button>
        </form>    
    </ul>

</body>
</html>
