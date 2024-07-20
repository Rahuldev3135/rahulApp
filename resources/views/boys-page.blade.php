<h3>Boys Page</h3>

<h6>Hello {{ $boyName }}</h6>
<strong>{{ $boyAge }}</strong>


<form method="post" action="{{ route('submit-boys-data') }}">
    @csrf
    Name: <input type="text" name="name">
    <br>
    Age: <input type="text" name="age">
    <br>
    <input type="submit">
</form>
