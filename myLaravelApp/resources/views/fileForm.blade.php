<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/upload"  method="post" enctype="multipart/form-data">
        @csrf 
        <label for="username">File: </label> 
        <input type="file" name= "file" id="file">
        <button type="submit">Upload File</button>
    </form>
</body>
</html>