<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Slider;
use DB;


class SliderController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function addSlider() {
        $categories = Category::where('publication_status', '1')->get();
        $subCategories = SubCategory::where('publication_status', '1')->get();
        return view('admin.slider.add-slider', ['categories' => $categories, 'subCategories' => $subCategories]);
    }

    public function saveImage1($request) {
        $sliderImage = $request->file('slider_main_image');
        $sliderImageName = $sliderImage->getClientOriginalName();
        $uploadPath = 'slider-images/';
        $imageUrl1 = $uploadPath . $sliderImageName;
        Image::make($sliderImage)->resize(270, 350)->save($uploadPath . $sliderImageName);
        return $imageUrl1;
    }

    public function saveImage2($request) {
        $sliderImage = $request->file('slider_sub_image');
        $sliderImageName = $sliderImage->getClientOriginalName();
        $uploadPath = 'slider-images/';
        $imageUrl2 = $uploadPath . $sliderImageName;
        $sliderImage->move($uploadPath, $sliderImageName);
        return $imageUrl2;
    }

    public function saveImageSlider(Request $request) {
        $imageUrl1 = $this->saveImage1($request);
        $imageUrl2 = $this->saveImage2($request);

        $slider = new Slider();
        $slider->category_id = $request->category_id;
        $slider->sub_category_id = $request->category_id;
        $slider->slider_main_image = $imageUrl1;
        $slider->slider_sub_image = $imageUrl2;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        return redirect('/add-slider')->with('message', 'Slider Image Save Successfully');

    }

    public function manageSlider()  {
        $sliders = DB::table('sliders')
            ->join('categories', 'sliders.category_id', '=', 'categories.id')
            ->join('sub_categories', 'sliders.sub_category_id', '=', 'sub_categories.id')
            ->select('sliders.*', 'categories.category_name', 'sub_categories.sub_category_name')
            ->get();
        return view('/admin.slider.manage-slider', ['sliders' => $sliders]);
    }

    public function unpublishedSlider($id)   {
        $slider = Slider::find($id);
        $slider->publication_status = 0;
        $slider->save();
        return redirect('/manage-slider')->with('message', 'Slider Info Unpublished Successfully');
    }

    public function publishedSlider($id) {
        $slider = Slider::find($id);
        $slider->publication_status = 1;
        $slider->save();
        return redirect('/manage-slider')->with('message', 'Slider Info Published Successfully');
    }

    public function editSlider($id) {
        $categories = Category::where('publication_status', '1')->get();
        $subCategories = SubCategory::where('publication_status', '1')->get();
        $slideById = Slider::find($id);
        return view('admin.slider.edit-slider', [
            'slideById' => $slideById,
            'categories' => $categories,
            'subCategories' => $subCategories
        ]);
    }

    public function updateImage1($sliderMainImage) {
        $sliderImageName = $sliderMainImage->getClientOriginalName();
        $uploadPath = 'slider-image/';
        $imageUrl1 = $uploadPath . $sliderImageName;
        $sliderMainImage->move($uploadPath, $sliderImageName);
        return $imageUrl1;
    }

    public function updateImage2($sliderSubImage) {
        $sliderImageName = $sliderSubImage->getClientOriginalName();
        $uploadPath = 'slider-image/';
        $imageUrl2 = $uploadPath . $sliderImageName;
        $sliderSubImage->move($uploadPath, $sliderImageName);
        return $imageUrl2;
    }
    public function updateSlider(Request $request) {
        $slider =Slider::find($request->slider_id);
        $slider->slider_main_image;
        $sliderMainImage = $request->file('slider_main_image');
        if($sliderMainImage) {
            $imageUrl1 = $this->updateImage1($sliderMainImage);
        } else {
            $imageUrl1=$slider->slider_main_image;
        }
        $sliderSubImage = $request->file('slider_sub_image');
        if($sliderSubImage) {
            $imageUrl2 = $this->updateImage2($sliderSubImage);
        } else {
            $imageUrl2=$slider->slider_sub_image;
        }

        $slider->category_id = $request->category_id;
        $slider->sub_category_id = $request->sub_category_id;
        $slider->slider_main_image = $imageUrl1;
        $slider->slider_sub_image = $imageUrl2;
        $slider->publication_status = $request->publication_status;
        $slider->save();
        return redirect('/manage-slider')->with('message', 'Slider Image Update Successfully');
    }
    public function deleteSlider($id) {
        $slider=Slider::find($id);
        unlink($slider->slider_main_image);
        unlink($slider->slider_sub_image);
        $slider->delete();
        return redirect('/manage-slider')->with('message', 'Slider Image Delete Successfully');
    }
    public function sliderSubCategoryByCategoryId($id) {
        $subCategoriesByCategoryId= SubCategory::where('category_id', $id)->get();
        echo view('admin.slider.sub-category-content', ['subCategoriesByCategoryId'=>$subCategoriesByCategoryId]);
    }


}