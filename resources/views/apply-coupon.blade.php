@php

    $fruits = 'off_five';
    $vegetables = 'off_ten';
    $utensils = 'off_fifteen';
    $cosmetics = 'off_twenty';
    $medicines = 'off_fifty';

@endphp

@if ($couponCode == $fruits)
    <h6>Applied coupon is 5% off</h6>
@elseif ($couponCode == $vegetables)
    <h6>Applied coupon is 10% off</h6>
@elseif ($couponCode == $utensils)
    <h6>Applied coupon is 15% off</h6>
@elseif ($couponCode == $cosmetics)
    <h6>Applied coupon is 20% off</h6>
@elseif ($couponCode == $medicines)
    <h6>Applied coupon is 50% off</h6>
@else
<h6>Applied coupon is invalid</h6>
@endif