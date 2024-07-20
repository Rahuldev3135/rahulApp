<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function addNum($num1, $num2)
    {
        $result = $num1 + $num2;
        return $result;
    }

    public function subNUm($num1, $num2)
    {
        $result = $num1 - $num2;
        return $result;
    }
    public function multiplyNum($num1, $num2)
    {
        $result = $num1 * $num2;
        return $result;
    }
    public function divideNum($num1, $num2)
    {
        $result = $num1 / $num2;
        return $result;
    }

    public function invalidNumberError()
    {
        return "Please give a valid number";
    }
}
