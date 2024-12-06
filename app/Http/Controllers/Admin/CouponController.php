<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function showCreateCoupon(){
        return view('admin.coupons.add-product');
    }
    public function showCouponList(){
        return view('admin.coupons.coupon-list');
    }
}
