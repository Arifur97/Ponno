<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use App\About;

class AboutController extends Controller
{
    public function addAbout(){
        return view('admin.about.add-about');
    }
    public function saveAbout(Request $request){
        $this->validate($request,array(
            'title'=>'required|max:20',
            'image'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'goal'=>'required',
        ));

         $aboutImage = $request->file('image');
         $aboutImageName = $aboutImage->getClientOriginalName();
         $uploadPath = 'about-image/';
         $imageUrl1 = $uploadPath . $aboutImageName;
         $aboutImage->move($uploadPath, $aboutImageName);

          $about=new About();
          $about->title=$request->title;
          $about->image=$imageUrl1;
          $about->mission=$request->mission;
          $about->vision=$request->vision;
          $about->goal=$request->goal;
          $about->save();
          return redirect('/add-about')->with('message','About Info Create Successful');
    }

//    public function saveAbout(Request$request){
//        if ($request->hasFile('image')){
//            $Image=$request->file('image');
//            $fileName=time().''.''.$Image->getClientOriginalName();
//            Image::make($Image)->resize(300,300)->save(public_path('/about-image/image/'.$fileName));
//            $about=new About();
//            $about->title=$request->title;
//            $about->image=$fileName;
//            $about->mission=$request->mission;
//            $about->vision=$request->vision;
//            $about=new About();
//            $about->goal=$request->goal;
//            $about->save();
//        }
//        return redirect('/add-about')->with('message','About Info Create Successful');
//    }

    public function manageAbout(){
        $abouts=About::all();
        return view('admin.about.manage-about',['abouts'=>$abouts]);
    }

    public function editAbout($id){
        $aboutById=About::find($id);
        return view('admin.about.edit-about',['about'=>$aboutById]);
    }
    public function updateAbout(Request$request){
        $aboutImage = $request->file('image');
        if($aboutImage){
            $aboutImageName = $aboutImage->getClientOriginalName();
            $uploadPath = 'about-image/';
            $imageUrl1 = $uploadPath . $aboutImageName;
            $aboutImage->move($uploadPath, $aboutImageName);
            $this->updateWithImage($request,$imageUrl1);
            return redirect('/manage-about')->with('message','About Info Update Successful');
        }else{
            $this->updateWithOutImage($request);
            return redirect('/manage-about')->with('message','About Info Update Successful');
        }
    }
    public function updateWithOutImage($request){
        $aboutId=$request->aboutId;
        $about= About::find($aboutId);
        $about->title=$request->title;
        $about->mission=$request->mission;
        $about->vision=$request->vision;
        $about->goal=$request->goal;
        $about->save();
    }
    public function updateWithImage($request,$imageUrl1){
        $aboutId=$request->aboutId;
        $about= About::find($aboutId);
        $about->title=$request->title;
        $about->image=$imageUrl1;
        $about->mission=$request->mission;
        $about->vision=$request->vision;
        $about->goal=$request->goal;
        $about->save();
    }

    public function deleteAbout($id) {
        $about=About::find($id);
        unlink($about->image);
        $about->delete();
        return redirect('/manage-about')->with('message', 'About Info Delete Successfully');
    }
}
