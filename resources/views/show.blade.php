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

    <div>
        <form action="/update/{{$user->id}}" method="post">
            @csrf

            <label for="name">Name</label>
            <input type="text" id="name" name="name">

            <label for="email">Email</label>
            <input type="text" id="email" name="email">

            <label for="password">Password</label>
            <input type="text" id="password" name="password">

            <button type="submit">Update</button>
        </form>
    </div>

    
</body>
</html>