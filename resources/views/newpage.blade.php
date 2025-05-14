<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel blade template</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/new.js')}}"></script>
</head>
<body>
    <h1>{{$variable}}</h1>
    <ul>
    @foreach($array as $a)
        <li>{{$a}}</li>
    @endforeach
    </ul>
    <img src="{{asset('images/classic.jpeg')}}" alt="">

    
</body>
</html>