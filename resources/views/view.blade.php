<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 3px solid black;
            border-collapse: collapse;
            padding: 15px;
            margin: 15px;
            text-align: center;
        }
        table{
           margin: 60px 250px;
           width: 400px;
        }
    </style>
</head>
<body>
    <a href="/" >Home</a>
    </br></br>
    <table>
        <tr>
            <th>Name</th>
            <th>Place</th>
            <th>Course</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach($data as $student){ ?>
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->place}}</td>
            <td>{{$student->course}}</td>
            <td><img src="{{$student->path}}" alt="image" width="80PX"/></td>
            <td><a href="/edit/{{$student->id}}">EDIT </a> <a href="">DELETE</a></td>

        </tr>
        <?php }?>
        
    </table>
    
</body>
</html>
