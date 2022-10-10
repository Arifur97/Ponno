<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function addSubCategory() {
        $allCategories = Category::all();
        return view('admin.sub-category.add-sub-category', ['allCategories'=>$allCategories]);
    }
    public function saveSubCategory(Request $request) {
        $subCategory= new SubCategory();
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_category_name = $request->sub_category_name;
        $subCategory->sub_category_description = $request->sub_category_description;
        $subCategory->publication_status = $request->publication_status;
        $subCategory->save();
        return redirect('/add-sub-category')->with('message','Sub Category Info Save Successfully');
    }
    public function manageSubCategory(){
        $subCategories = SubCategory::all();
        return view('/admin.sub-category.manage-sub-category', ['subCategories' => $subCategories]);
    }
    public function unpublishedSubCategory($id)  {
        $subCategory=SubCategory::find($id);
        $subCategory->publication_status=0;
        $subCategory->save();
        return redirect('/manage-sub-category')->with('message',' Sub Category Info Unpublished Successfully');
    }
    public function publishedSubCategory($id){
        $subCategory=SubCategory::find($id);
        $subCategory->publication_status=1;
        $subCategory->save();
        return redirect('/manage-sub-category')->with('message',' Sub Category Info Published Successfully');
    }
    public function editSubCategory($id) {
        $categories= Category::where('publication_status','1')->get();
        $subCategoryById=SubCategory::find($id);
        return view('/admin.sub-category.edit-sub-category', ['subCategory' => $subCategoryById,'categories'=>$categories]);
    }
    public function updateSubCategory(Request$request)  {
        $subCategoryId=$request->sub_category_id;
        $subCategory=SubCategory::find($subCategoryId);
        $subCategory->category_id=$request->category_id;
        $subCategory->sub_category_name=$request->sub_category_name;
        $subCategory->sub_category_description=$request->sub_category_description;
        $subCategory->publication_status=$request->publication_status;
        $subCategory->save();
        return redirect('/manage-sub-category')->with('message','Sub Category Info Update Successfully');
    }
    public function deleteSubCategory($id){
        $subCategory=SubCategory::find($id);
        $subCategory->delete();
        return redirect('/manage-sub-category')->with('message','Sub Category Info Delete Successfully');

    }
}
