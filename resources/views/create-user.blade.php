<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <form action="{{ route('store-user') }}" method="post">
        @csrf

        Name : <input type="text" name="name"><br><br>
        Email : <input type="email" name="email"><br><br>
        Password : <input type="password" name="password"><br><br>
        <input type="submit">
    </form>
</body>
</html>