<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function registerPage()
    {
        return view('login');
    }
    public function loginPage()
    {
        return view('form');
    }
    public function LoggedInPage()
    {
        // return to_route('Dashboard');
        return view('dashboard');
    }

    public function dashboardPage()
    {
        return view('dashboard');
    }
    public function logoutPage()
    {
        return view('logout');
    }
    public function confirmAge()
    {
        return view('verify-age');
    }
}
