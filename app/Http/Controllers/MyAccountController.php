<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function myaccount() 
    {
        return view('my-account');
    }
}
