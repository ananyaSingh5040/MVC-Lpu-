<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="/login" method="post">
        <!-- CROSS SITE REQUEST FORGERY -->
        @csrf
        <label for="username">Name: </label> 
        <input type="text" name= "username" id="username" placeholder="Enter your name..." value="{{old('username')}}">
        <span style="color: red;">@error('username'){{$message}}@enderror</span> <br><br>
        <label for="password">Password: </label> 
        <input type="password" name= "password" id="password" placeholder="Enter your password..." value="{{old('password')}}">
        <span style="color: red;">@error('password'){{$message}}@enderror</span> <br><br>
        <button type="Submit">Log In</button>
    </form>

</body>
</html>