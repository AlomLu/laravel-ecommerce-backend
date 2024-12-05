<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('user.auth.login');
     }

     public function showSignup(){
        return view('user.auth.signup');
     }

     public function showForgotPassword(){
        return view ('user.auth.forgot-password');
     }

}
