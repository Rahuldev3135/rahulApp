
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login-Page</title>
</head>
<body>
    <center><h1>Product Form</h1></center>
    <center>
        <form action="{{route('LoggedIn')}}" method="get">
            Name: <input type="text" name="name"><br>
            Age: <input type="number" name="age"><br>
                <input type="submit" name="submit">
        </form>
    </center>  
</body>
</html>