<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    function LoginPage(){
        return view('Login.AdminLogin');
    }
}
