<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- {{print_r($errors)}} -->
     <!-- @if($errors->any())
     @foreach($errors->all() as $error)
     <p>{{$error}}</p>
     @endforeach
     @endif -->
    <form action="/usercont" method="post">
        <!-- CROSS SITE REQUEST FORGERY -->
        @csrf
        <label for="username">Name: </label> 
        <input type="text" name= "username" id="username" placeholder="Enter your name..." value="{{old('username')}}">
        <span style="color: red;">@error('username'){{$message}}@enderror</span> <br><br>
        <label for="password">Password: </label> 
        <input type="password" name= "password" id="password" placeholder="Enter your password..." value="{{old('password')}}">
        <!-- Security reasons ke wajah se the password is not inPlace -->
        <span style="color: red;">@error('password'){{$message}}@enderror</span> <br><br>
        <button type="Submit">Submit</button>
    </form>

</body>
</html>