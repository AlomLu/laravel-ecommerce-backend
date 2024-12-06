<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){
        return view('user.auth.login');
     }
    public function adminShowLogin(){
        return view('admin.auth.login');
     }
}
