<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply For DL</title>
</head>
<body>
    <h3>Apply For DL</h3>
    <form method="post" action="{{ route('check-dl-eligibility') }}">
        @csrf
        Name: <input type='text' name='name'> <br>
        Age: <input type='text' name='age'> <br>
        <input type='submit'>
    </form>
</body>
</html>