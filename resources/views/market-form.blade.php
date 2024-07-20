<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Market Form</title>
</head>
<body>
    <center>
        <h1>Public Mall</h1>
        <form action="{{route('mall-items')}}" method="get">
            <label for="items">Choose items:</label>
            <select name="mall" id="mall">
                <option value="selects"><h4>Selects</h4></option>
                <option value="clothes">Clothes</option>
                <option value="toys">Toys</option>
                <option value="medicines">Medicines</option>
                <option value="shoes">Shoes</option>
                <option value="cosmetics">Cosmetics</option>
            </select>
            <input type="submit" value="apply">
        </form>
    </center>
</body>
</html>
