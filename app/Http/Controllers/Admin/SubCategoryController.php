<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Subcategory;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategory(){
        $categories = Category::all();
        return view('admin.category.subcategory.sub-category', compact('categories'));
    }

    public function addSubCategory(Request $request){
        // dd($request->all());
        $request->validate([
            'subcat_name'=>'required|unique:subcategories',
            'category_id'=>'required'
        ]);

        $result = Subcategory::create([
            'subcat_name' => ucwords($request->subcat_name),
            'category_id' => $request->category_id
        ]);

        // dd($result);

        return redirect()->route('sub-category.list')->with('status', 'Subcategory added successfully');
    }
    public function subCategoryList(){
        $subCategories = Subcategory::with('category')->get();
        return view( 'admin.category.subcategory.sub-category-list',compact('subCategories'));
    }
    public function editSubCategory($id){
        $subCategory = Subcategory::findOrFail($id);
        $categories = Category::all();
        return view( 'admin.category.subcategory.edit-sub-category',compact('categories' ,'subCategory'));
    }
    public function updateSubCategory(Request $request){
        // dd($request->all());

        $request->validate([
            'subcat_name'=>'required|unique:subcategories',
            'category_id'=>'required'
        ]);

        $result = Subcategory::where('id', $request->subcat_id)->update([
            'subcat_name'=>ucwords('$request->subcat_name'),
            'category_id'=>$request->category_id
        ]);

        // dd($result);
        return redirect()->route('sub-category.list')->with('status', 'Subcategory updated successfully');
    }

    public function deleteSubCategory($id){
        Subcategory::findOrFail($id)->delete();

        return redirect()->route('sub-category.list')->with('status', 'Subcategory deleted successfully');
    }
}
