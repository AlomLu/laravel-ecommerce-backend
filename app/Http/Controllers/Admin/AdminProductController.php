<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function showAddProduct(){
        return view('admin.product.add-product');
    }
    public function showProductList(){
        return view('admin.product.product-list');
    }
    public function showProductReview(){
        return view('admin.product.product-review');
    }
}
