{{-- <a href="{{ route('my-first-post-page', 'kala') }}">Path to First Post Page</a> --}}
{{-- <h3>Hello {{ $username . ',' . $data['non-veg'].','. $data['veg']}}</h3>

{{ $data['non-veg'] }}
{{ $data['veg'] }}

{{ dd($arr) }}

@foreach ($arr as $val )
    {{ $val }}
@endforeach

{{ print_r($arr) }}

{{ print_r($subjects) }}

{{ print_r($marks) }} --}}

{{-- create variable inside view --}}
@php
    $name = 'Rahul'; 
@endphp

{{-- If else in view --}}
@if ($name == 'Rahul')
    <h6>Samaila King</h6>
@elseif ($name == 'Ankit')
    <h6>Sundarpur King</h6>
@elseif ($name == 'Chhotu')
    <h6>Bhandaridah Peon</h6>
@else
    <h6>Mirzapur King</h6>
@endif

{{-- Same above code in core php format --}}

<?php
if($name == 'Rahul'){ ?>
    <h6>Samaila King</h6>
<?php } elseif ($name == 'Ankit'){ ?>
    <h6>Sundarpur King</h6>
<?php } elseif ($name == 'Ankit'){ ?>
    <h6>Bhandaridah King</h6>
<?php } else{ ?>
    <h6>Mirzapur King</h6>
<?php }
?>
