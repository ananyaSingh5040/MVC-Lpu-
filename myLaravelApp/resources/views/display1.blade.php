<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="{{asset('storage/uploads/'.$path)}}" alt="Image not found" width="300">
    <p>
        <a href="{{asset('storage/uploads/'.$path)}}" target="_blank">View Full Image</a>
    </p>
</body>
</html>