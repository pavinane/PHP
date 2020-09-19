<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <p>Welcome Home pavi</p>
   <h1>user name is {{$name}}</h1>    <!-- passing some date controller into view -->  
   <p>Name:{{$user['name']}}</p>
   <p>Email:{{$user['email']}}</p>
   <p>Mobile Number:{{$user['phone']}}</p>
</body>
</html>