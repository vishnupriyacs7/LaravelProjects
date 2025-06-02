<!DOCTYPE html>
<html>
<head>
    <title>Create New Item</title>
</head>
<body>

    <h1>Create New Item</h1>

    <form action="/items" method="POST">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="/">Back to Home</a>

</body>
</html>
