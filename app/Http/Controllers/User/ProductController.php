<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductList(){
        return view("user.product.list");
    }

    public function showProductDetails(){
        return view("user.product.details");
    }
}
