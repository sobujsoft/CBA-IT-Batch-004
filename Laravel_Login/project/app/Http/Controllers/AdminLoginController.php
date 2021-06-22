<?php

namespace App\Http\Controllers;

use App\Models\AdminLoginModel;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    function LoginPage(){
        return view('Login.AdminLogin');
    }

    function AdminLoginCheck(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');

        $count= AdminLoginModel::where('email',$email)->where('password',$password)->count();
        if ($count==1){
            $request->session()->put('email',$email);
            return 1;
        }
        else{
            return 0;
        }
    }
}
