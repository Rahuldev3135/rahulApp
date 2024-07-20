@php
    $data = [
        'name' => 'Karn'
    ];

    $payableAmount = 1200;

    $coupon1 = 'off_five';
    $coupon2 = 'off_ten';
    $coupon3 = 'off_twenty';
    $coupon4 = 'off_fifty';

    $couponApplied = true;
    $appliedCouponName = 'hjhjgj';

    $num1 = 100;
    $num2 = 399;
@endphp

<h6>Hello @isset($data['name']) {{ $data['name'] }} @else Student @endisset </h6>

<?php if(isset($admissionNo)){
    echo "<h6>Your admission no is " . $admissionNo . " </h6>";
}
?>

@isset($admissionNo)
    <h6>Your admission no is {{ $admissionNo }}</h6>
@endisset

{{-- if else, for loop, while loop, foreach loop --}}


<?php if($couponApplied){ ?>
    <H5>1200 - 120</H5>
<?php }else{ ?>
    <H5>1200</H5>
<?php } ?>

@if ($couponApplied)
    @if ($appliedCouponName == $coupon1)
        <h5>Your payable amount is {{ $payableAmount - (($payableAmount/100) * 5) }}</h5>
    @elseif ($appliedCouponName == $coupon2)
        <h5>Your payable amount is {{ $payableAmount - (($payableAmount/100) * 10) }}</h5>
    @elseif ($appliedCouponName == $coupon3)
        <h5>Your payable amount is {{ $payableAmount - (($payableAmount/100) * 20) }}</h5>
    @elseif ($appliedCouponName == $coupon4)
        <h5>Your payable amount is {{ $payableAmount - (($payableAmount/100) * 50) }}</h5>
    @else
        <h5>Invalid Coupon</h5>
    @endif
@else
    <H5>{{ $payableAmount }}</H5>
@endif


{{-- loop --}}
<?php
$num = 6;
for ($i=0; $i <= 10; $i++){ 
    echo $num * $i . '<br>';
}
?>

@for ($i = 0; $i <= 10; $i++)
    {{ $num * $i }} <br>
@endfor



<?php
$base = 2;
$power = 5;
$result = 1;
$j = 1;
while($j <= $power){
    $result = $result * $base; //32
    $j++;
}
echo $result;
$j = 1;
$result = 1;
?>

@while ($j <= $power)
    @php $result = $result * $base @endphp
    @php $j++ @endphp
@endwhile

{{ $result }}


<?php
$k = 0;
do{
    echo "Hello <br>";
    $k++;
}while($k <= 10);

$z = 0;
?>


<?php
// foreach loop
$namesArray = [
    'name1' => 'Rahul',
    'name2' => 'Ankit',
    'name3' => 'Kundan',
    'name4' => 'Nandan',
    'name5' => 'Barku',
    'name6' => 'Kalu',
    'name7' => 'Bullet',
    'name8' => 'Bhola',
];

foreach($namesArray as $key => $name){
    echo $key . "<br>";
}

?>
@foreach ($namesArray as $key => $name)
    {{ $key . ' is ' . $name  }} <br>
@endforeach


