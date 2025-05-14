<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 2px solid black;
            margin: 50px 300px;
            text-align: center;
            padding: 40px;
        }
        #register{
            background-color: lightskyblue;
        }
    </style>
</head>
<body>
    
    <form action="{{route('adddata')}}" method="post" enctype="multipart/form-data">
        @csrf
        Name:<input type="text" name="name" /><br><br>
        Place:<input type="text" name="place" /><br><br>
        Course:<input type="text" name="course" /><br><br>
        Choose an image:<input type="file" name="photo" /><br><br>
        <input type="submit" id="register" value="REGISTER" />
    </form>
</body>
</html>