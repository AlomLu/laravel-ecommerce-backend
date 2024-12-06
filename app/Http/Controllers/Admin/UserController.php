<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAddUser(){
        return view('admin.users.add-user');
    }
    public function showAllUser(){
        return view('admin.users.all-user');
    }
}
