@php
    $a = 100;
    $b = 200;
    $c = 300;
@endphp

@if ($a > $b)
    {{$a . "is greater than" . $b}}
    <p>You are bigger</p>
    @elseif ($a < $b)
    {{$b . "is greater than" . $a}}
    <p>You are smaller</p>
    @elseif ($a == $b)
    {{$a . "is equal to" . $b}}
    <p>Both are equal</p>
    @else
        <p>Invalid Input</p>
@endif

@if ($a > $b && $a > $c)
    <h2>First person is biggest</h2>
    @elseif ($a < $b && $b < $c)
    <h2>First person is smaller than second and third person</h2>
    @elseif ($a < $b && $a > $c)
    <h2>First person is bigger than second person but smaller than third person</h2>
    @elseif ($b > $a && $b < $c)
    <h2>Second person is bigger than first person but smaller than third peron</h2>
    @elseif ($c > $a && $c > $b)
    <h2>Third person is biggest</h2>
@endif


@isset($num)
    @if ($num % 2 == 0)
    <h1>The number is Even</h1>
    @else
    <h1>The number is Odd</h1>
    @endif

    @if ($num % 4 ==0 && $num % 100 != 0)
    {{ $num . " is leap year"}}
    @elseif ($num % 400 == 0)
    {{$num . " is leap year"}}
    @else
    {{ $num . " is not leap year"}}
    @endif
@endisset


@php
    $favcolor = "Red";
    $d = 4;
    $z = 1;

    $PNR = 6536893287;
    $status = 334;

    
    
@endphp

@switch($favcolor)
    @case("Red")
        <h1>Your fav color is red!</h1>
        @break
    @case("Blue")
        <h1>Your fav color is blue!</h1>
    @break
    @case("Yelow")
        <h1>Your fav color is yellow!</h1>
    @break
    @default
        <h1>Your fav color neither red,blue or yellow</h1>
@endswitch

@switch($d)
    @case(2)
        <h1>Today is Saturday!</h1>
        @break
    @case(5)
        <h1>Today is Monday!</h1>
    @break
    @case(4)
        <h1>Today is Holiday!</h1>
    @break
    @default
        <h1>Today is Weekend!</h1>
@endswitch

@for ($x = 0;$x <= 10; $x++)
    @if ($x <= 5)
    {{ "Hello World!" }}
    @elseif ($x > 10)
    {{ "Hello Users" }}
    @endif
@endfor

@for ($y = 1;$y <= 10; $y = $y+2)
    <h1>The number is {{ $y }}</h1>
@endfor

@while ($z <= 10)
    <h1>The value is:- {{ $z }}</h1>
    {{ $z++ }}
@endwhile


@if ($PNR)
    @if ($status >= 1 && $status <= 100)
        <h3>Your ticket is confirmed</h3>
    @elseif ($status >= 101 && $status <= 500)
        <h3>Your ticket is RAC</h3>
    @elseif ($status >= 501 && $status <= 1000)
        <h3>Your ticket is WL</h3>
    @endif
@else
    <h3>Invalid PNR</h3>
@endif
