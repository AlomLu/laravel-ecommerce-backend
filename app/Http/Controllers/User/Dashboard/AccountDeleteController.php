<?php

namespace App\Http\Controllers\User\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountDeleteController extends Controller
{
    public function showAccountDelete(){
        return view ("user.dashboard.account-delete");
    }
}
