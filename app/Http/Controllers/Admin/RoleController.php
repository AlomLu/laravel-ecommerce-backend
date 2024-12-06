<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function showCreateRoles(){
        return view('admin.roles.create-roles');
    }
    public function showAllRoles(){
        return view('admin.roles.all-roles');
    }
}
