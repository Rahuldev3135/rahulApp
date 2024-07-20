<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $userData = [
            'name' => 'Kalu Ji',
            'age' => '24',
            'email' => 'kalu@gmail.com',
            'education' => [
                '10' => '60',
                '12' => '61',
                'Graduation' => '62',
            ]
        ];

        $name = 'Kalu Ji';
        return view('users.index', compact('name', 'userData')); //resourse/views/users/index.blade.php
    }

    public function create($name = '')
    {
        return view('create-user');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $insertQuery = "INSERT INTO `table_name` ";

        echo "User Created Successfully!";
    }

    public function demo($username)
    {
        $data = [
            'veg' => 'paneer',
            'non-veg' => 'chicken'
        ];
        // return view('demo', ['data' => $data, 'NAME' => $username]);
        return view('demo', compact('username', 'data'));
    }


    public function example_fun()
    {
        // $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        // $subjects = ['Maths', 'Science', 'English', 'Hindi'];
        // $marks = [80, 78, 59, 68, 87, 100];
        // return view('demo', compact('arr', 'subjects','marks'));
        // // return view('demo')->with(['subjects' => $subjects, 'arr' => $arr, 'marks' => $marks]);
        // return view('demo', ['subjects' => $subjects, 'arr' => $arr, 'marks' => $marks]);

        return view('demo');
    }

    public function practice_fun($num)
    {
        return view('practice', compact('num'));
    }

    // studentAddmission
    public function studentAddmission($admissionNo)
    {
        return view('student', ['admissionNo' => $admissionNo]);
    }

    // temporaryStudentAddmission
    public function temporaryStudentAddmission()
    {
        return view('student');
    }

    public function testNumber($number = '500')
    {
        return view('valid-number', ['number' => $number]);
    }

    public function schoolNumber($schoolNum = '')
    {
        return view('valid-number', ['schoolNum' => $schoolNum]);
    }


    public function formMethod()
    {
        return view('product-form');
    }

    public function applyCoupon(Request $request)
    {
        $couponCode = $request->discount_code;
        return view('apply-coupon', ['couponCode' => $couponCode]);
    }

    public function marketMethod()
    {
        return view('market-form');
    }

    public function price(Request $request)
    {
        $applyCode = $request->mall;
        return view('mall-rate', compact('applyCode'));
    }
    public function loops()
    {
        $items = [44, 23, 75, 86, 98, 37];
        return view('loop-method', compact('items'));
    }
}
