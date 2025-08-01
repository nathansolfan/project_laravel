<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>

    <p> {{$user->email}} </p>
    <form action="/delete/{{$user->id}}" method="POST">
    @csrf
    <button type="submit" >Delete</button>
    </form>
    
</body>
</html>