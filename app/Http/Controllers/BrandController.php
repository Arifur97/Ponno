<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;
use App\Brand;
use DB;

class BrandController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function addBrand()
    {
        return view('admin.brand.add-brand');
    }

    public function newBrand(Request $request)
    {
        Brand::create($request->all());

        return redirect('/add-brand')->with('message', 'Brand Info Save Successfully');
    }

    public function manageBrand()
    {
        $brands = Brand::all();
        return view('admin.brand.manage-brand', ['brands' => $brands]);
    }

    public function unpublishedBrand($id)
    {
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('/manage-brand')->with('message', 'Brand Info Unpublished Successfully');
    }

    public function publishedBrand($id)
    {
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('/manage-brand')->with('message', 'Brand Info Published Successfully');
    }
    public function editBrand($id){
        $brandById=Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brandById]);
    }
    public function updateBrand(Request$request){
        $brand=Brand::find($request->id);
        $brand->brand_name=$request->brand_name;
        $brand->brand_description=$request->brand_description;
        $brand->publication_status=$request->publication_status;
        $brand->save();
        return redirect('/manage-brand')->with('message','Brand Info Update Successfully');
    }
    public function deleteBrand($id){
        $brand=Brand::find($id);
        $brand->delete();
        return redirect('/manage-brand')->with('message','Brand Info Update Successfully');
    }
}
