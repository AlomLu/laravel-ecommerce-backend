<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function showOrderDetails(){
        return view('admin.orders.order-details');
    }
    public function showOrderList(){
        return view('admin.orders.order-list');
    }
}
