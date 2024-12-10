<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view ('admin.category.category');
    }

    public function addCategory(Request $request){
        // dd($request->all());
        $request->validate([
            'cat_name'=>'required|unique:categories'
        ]);

        Category::create([
            'cat_name'=>ucfirst($request->cat_name)
        ]);
        // $category = new Category();
        // $category->cat_name = ucfirst($request->cat_name);

        // $category->save();

        // dd($category);


        return redirect()->route('category.list')->with('status', 'Category added successfully');
    }
    public function showCategoryList(){
        $categories = Category::all();
        return view('admin.category.category-list', ['categories'=>$categories]);
    }

    public function showEditCategory($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit-category', compact('category'));
    }
    public function updateCategory(Request $request){
        $request->validate([
            'cat_name'=>'required|unique:categories'
        ]);

        Category::where('id', $request->cat_id)->update([
            'cat_name'=>$request->cat_name
        ]);

        return redirect()->route('category.list')->with('status', 'category updated successfully');
    }

    public function deleteCategory($id){
        Category::findOrFail($id)->delete();

        // Category::where('id', $id)->delete();

        return redirect()->route('category.list')->with('status', 'Category deleted successfully');
    }
}
