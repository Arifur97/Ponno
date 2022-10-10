<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SizeWidth;

class SizeWidthController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function addSizeWidth(){
        return view('admin.sizeWidth.add-size-width');
    }
    public function saveSizeWidth(Request$request){
        SizeWidth::create($request->all());
        return redirect('/add-size-width')->with('message','Size Width Info Save Successfully');
    }
    public function manageSizeWidth(){
        $sizeWidths=SizeWidth::all();
        return view('admin.sizeWidth.manage-size-width', ['sizeWidths'=>$sizeWidths,]);
    }
    public function unpublishedSizeWidth($id){
        $sizeWidth=SizeWidth::find($id);
        $sizeWidth->publication_status=0;
        $sizeWidth->save();
        return redirect('/manage-size-width')->with('message','Size Width Info Unpublished Successfully');
    }
    public function publishedSizeWidth($id){
        $sizeWidth=SizeWidth::find($id);
        $sizeWidth->publication_status=1;
        $sizeWidth->save();
        return redirect('/manage-size-width')->with('message','Size Width Info Published Successfully');
    }
    public function editSizeWidth($id){
        $sizeWidths=SizeWidth::find($id);
        return view('admin.sizeWidth.edit-size-width', ['sizeWidths'=>$sizeWidths,]);
    }
    public function updateSizeWidth(Request$request){
        $sizeWidthById=$request->sizeWidthId;
        $sizeWidth=SizeWidth::find($sizeWidthById);
        $sizeWidth->size_width_name=$request->size_width_name;
        $sizeWidth->size_width_description=$request->size_width_description;
        $sizeWidth->publication_status=$request->publication_status;
        $sizeWidth->save();
        return redirect('/manage-size-width')->with('message','Size Width Info Update Successfully');
    }
    public function deleteSizeWidth($id){
        $sizeWidth=SizeWidth::find($id);
        $sizeWidth->delete();
        return redirect('/manage-size-width')->with('message','Size Width Info Delete Successfully');
    }
}

