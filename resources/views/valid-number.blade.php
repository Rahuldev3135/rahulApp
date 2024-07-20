
@isset($number)
    <h1>Your test no:- {{ $number }}</h1>
@endisset


@empty($schoolNum)
    Empty Value
@else
    <h1>Your number :- {{ $schoolNum }}</h1>
@endempty

@php
   $names = ['Salman khan','Shahrukh khan','Amir khan','Arbaaz khan','Sohail khan']; 
@endphp

<ul>
    @foreach ($names as $n )
        <li>{{ $n }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
        <li>{{ $loop->index }} - {{ $n }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
        <li>{{ $loop->count }} - {{ $n }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
    @if ($loop->first)
        <li style="color:red">{{ $n }}</li>
    @else
        <li>{{ $n }}</li>
    @endif
        
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
    @if ($loop->last)
        <li style="color:blue">{{ $n }}</li>
    @else
        <li>{{ $n }}</li>
    @endif
        
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
        <li>{{ $loop->iteration }} - {{ $n }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )
        <li>{{ $loop->remaining }} - {{ $n }}</li>
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )

    @if ($loop->first)
        <li style="color:blue">{{ $n }}</li>
    @elseif ($loop->last)
        <li style="color:red">{{ $n }}</li>
    @else
        <li>{{ $n }}</li>
    @endif
        
    @endforeach
</ul>

<ul>
    @foreach ($names as $n )

    @if ($loop->even)
        <li style="color:blue">{{ $n }}</li>
    @elseif ($loop->odd)
        <li style="color:red">{{ $n }}</li>
    @endif
        
    @endforeach
</ul>
