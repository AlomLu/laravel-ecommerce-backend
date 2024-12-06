<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAddCategory(){
        return view('admin.category.add-category');
    }
    public function showCategoryList(){
        return view('admin.category.category-list');
    }
}
