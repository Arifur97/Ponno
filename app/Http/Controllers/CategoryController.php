<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }
    public function newCategory(Request$request){

        Category::create($request->all());
        return redirect('/add-category')->with('message','Category Info Save Successfully');
    }
    public function manageCategory(){
        $categories=Category::all();
        return view('admin.category.manage-category', ['categories'=>$categories,]);
    }
    public function unpublishedCategory($id){
       $category=Category::find($id);
       $category->publication_status=0;
       $category->save();
        return redirect('/manage-category')->with('message','Category Info Unpublished Successfully');
    }
    public function publishedCategory($id){
        $category=Category::find($id);
        $category->publication_status=1;
        $category->save();
        return redirect('/manage-category')->with('message','Category Info Published Successfully');
    }
    public function editCategory($id){
        $categoryById=Category::find($id);
        return view('admin.category.editCategory',['category'=>$categoryById]);
    }
    public function updateCategory(Request$request) {
       $category=Category::find($request->id);
       $category->category_name=$request->category_name;
       $category->category_description=$request->category_description;
       $category->save();

       return redirect('/manage-category')->with('message','Category Info Update Successfully');
    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/manage-category')->with('message','Category Info Delete Successfully');
    }

}
