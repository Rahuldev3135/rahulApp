
@php
    
    $numbers = [24,53,44,63,97,456];
    $names = ['Riya','Tiya','Gudiya','Shreya'];
    $text = "RAHUL!";
    $cars = ["Volvo", "BMW", "Toyota"];
    $bikes = ["Brand"=>"Hero","Model"=>"Passion Pro 110","Color"=>"Silver-Blue"];
@endphp

@foreach($items as $item)
    {{ $loop->remaining }} Number of remaining iterations
    {{ $loop->depth }} Depth or nesting level of the current loop
@endforeach


@foreach($items as $item)
    @if($loop->first)
        <h4>You are awesome</h4>
    @endif

    @if($loop->iteration % 2 == 0)
        <h4>You are best</h4>
    @endif

    @if($loop->last)
        <h4>You are good</h4>
    @endif
@endforeach

@foreach($items as $item)
    @if ($loop->first)
        <p>First</p>
    @else
        <p>Not first</p>
    @endif
@endforeach
@foreach ($numbers as $num)
    @if ($loop->iteration == 4)
        {{ $num }}
    @elseif ($numbers[2] % 2 == 0)
        <p>Hey there!</p>
    @endif
@endforeach

@foreach ($names as $name )
        @if ($loop->count)
            {{ $name }}
        @elseif($loop->remaining)
            {{ $name }}
        @endif
@endforeach

<p>Hello  {!! $text !!} </p>  
{{ now()->format('h:i') }}
<p>Hello {{ $text }}</p>  

@if (count($names) == 1)
    <p>I have one records</p>
@elseif (count($names) > 1)
    <p> I have multiple records</p>
@else
    <p>I don't have any records</p>
@endif

@foreach ($cars as $car )
    @if ($car == 'BMW')
        <p>Honda</p>
    @else   
        <p>{{ $car }}</p> 
    @endif
    
@endforeach

{{ $cars[1] }}

@foreach ($bikes as $key => $bike )
    <p>{{ $key . " is " . $bike }}</p>
@endforeach

@foreach ($bikes as $bike)
    @if ($loop->first)
        {{ $bike }}
    @elseif ($loop->remaining)
        {{ $bike }}
    @endif
@endforeach

{{-- @foreach ($bikes as $bike)
        {{ $bike["Brand"] }}
@endforeach --}}

{{ $bikes["Brand"] }}
<br><br>

@foreach ($items as $item)
    {{ $loop->first }}   
@endforeach

