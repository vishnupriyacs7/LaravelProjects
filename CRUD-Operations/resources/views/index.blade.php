<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table Details</h1>
    <ul>
        @foreach($data as $d)
            <li>NAME : {{$d->name}}</li>
            <li>EMAIL : {{$d->email}}</li>  
        @endforeach
    </ul>
</body>
</html>