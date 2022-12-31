<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function AllSubCategory()
    {
        $subcategories =  Category::latest()->get();

        return view('backend.subcategory.subcategory_all', compact('subcategories'));
    }

    public function AddSubCategory()
    {

        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('backend.subcategory.subcategory_add', compact('categories'));
    } // End Method 


    public function StoreSubCategory(Request $request)
    {

        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'SubCategoria Inserida com sucesso!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
    } // End Method 
}
