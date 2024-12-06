<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showSignup(){
        return view('user.auth.signup');
     }
    public function adminShowSignup(){
        return view('admin.auth.signup');
     }
}
