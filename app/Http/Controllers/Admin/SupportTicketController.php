<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function showSupportTicket(){
        return view('admin.support-ticket');
    }
}
