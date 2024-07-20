@php
    $clothesRates = 2000;
    $toysRates = 1000;
    $medicinesRates = 1000;
    $shoesRates = 1500;
    $cosmeticsRates = 2000;
@endphp
@if ($applyCode == 'clothes')
    <h2>Actual Price Of Clothes:- {{ $clothesRates }}</h2>
    <h4>Your payable amount with applied 10% discount is:- {{ $clothesRates - (($clothesRates/100) * 10) }}</h4>
    @elseif ($applyCode == 'toys')
    <h2>Actual Price Of Toys:- {{ $toysRates }}</h2>
    <h4>Your payable amount with applied 5% discount is:- {{ $toysRates - (($toysRates/100) *5) }}</h4>
    @elseif ($applyCode == 'medicines')
    <h2>Actual Price Of Medicines:- {{ $medicinesRates }}</h2>
    <h4>Your payable amount with applied 15% discount is:- {{ $medicinesRates - (($medicinesRates/100) *15) }}</h4>
    @elseif ($applyCode == 'shoes')
    <h2>Actual Price Of Shoes:- {{ $shoesRates }}</h2>
    <h4>Your payable amount with applied 5% discount is:- {{ $shoesRates - (($shoesRates/100) *5) }}</h4>
    @elseif ($applyCode == 'cosmetics')
    <h2>Actual Price Of Cosmetics:- {{ $cosmeticsRates }}</h2>
    <h4>Your payable amount with applied 20% discount is:- {{ $cosmeticsRates - (($cosmeticsRates/100) *20) }}</h4>
    @else
    <h3>Invalid items</h3>
@endif
{{-- {{$applyCode}} --}}