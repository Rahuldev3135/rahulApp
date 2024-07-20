<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {
        return view('create-post');
    }

    public function deletePost($post)
    {
        echo $post;
        // Delete Post Logic Here
    }

    public function checkLeapYear($year)
    {
        if ($year % 400 == 0) {
            echo $year . " is leap year";
        } elseif ($year % 100 == 0) {
            echo $year . " is not leap year";
        } elseif ($year % 4 == 0) {
            echo $year . " is leap year";
        } else {
            echo $year . " is not a leap year";
        }
        
    }
}
