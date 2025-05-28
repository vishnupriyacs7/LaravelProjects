<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    @if($fileModel->image)
        <img src="{{ asset('uploads/' . $fileModel->image) }}" alt="Image" width="300" height="200">    
    @else
        <p>No image found</p>
    @endif

</body>
</html>