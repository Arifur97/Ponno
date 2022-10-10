<?php

namespace App\Http\Controllers;

use App\ProductSubImage;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use DB;
use App\SizeWidth;
use App\ProductSizeWidth;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function addProduct() {
        $categories=Category::where('publication_status',1)->get();
        $subCategories=SubCategory::where('publication_status',1)->get();
        $brands=Brand::where('publication_status',1)->get();
        $sizeWidths = SizeWidth::where('publication_status',1)->get();
        return view('/admin.product.add-product',[
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'brands'=>$brands,
            'sizeWidths'=>$sizeWidths
        ]);
    }

    public function saveProductSizeWeight($request, $productId) {
        foreach ($request->size_width_id as $selectedOption) {
            $productSizeWidth =new ProductSizeWidth();
            $productSizeWidth->product_id = $productId;
            $productSizeWidth->size_width_id = $selectedOption;
            $productSizeWidth->save();
        }
    }


    public function saveProductBasicInfo($request) {
        $product =new Product();
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_color = $request->product_color;
        $product->product_country  = $request->product_country;
        $product->product_sku = $request->product_sku;
        $product->product_price = $request->product_price;
        $product->discount_product_amount=$request->discount_product_amount;
        $product->discount_product_price=$request->discount_product_price;
        $product->top_left_one = $request->top_left_one;
        $product->top_left_two = $request->top_left_two;
        $product->top_right_one = $request->top_right_one;
        $product->top_right_two = $request->top_right_two;
        $product->carousel_slider = $request->carousel_slider;
        $product->top_product_status = $request->top_product_status;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->top_image = $this->saveProductToplImage($request);
        $product->owl_carousel_image = $this->saveProductOwlCarouselImage($request);
        $product->product_image = $this->saveProductMainImage($request);
        $product->publication_status=$request->publication_status;
        $product->save();
        $productId = $product->id;
        return $productId;
    }
    public function saveProductToplImage($request) {
        $topImage=$request->file('top_image');
        $topImageName=$topImage->getClientOriginalName();
        $uploadPath='product-top-images/';
        $topImageUrl=$uploadPath.$topImageName;
        $topImage->move($uploadPath,$topImageName);
        return $topImageUrl;
    }

    public function saveProductOwlCarouselImage($request) {
        $owlImage=$request->file('owl_carousel_image');
        $owlImageName=$owlImage->getClientOriginalName();
        $uploadPath='product-owl-images/';
        $owlImageUrl=$uploadPath.$owlImageName;
        $owlImage->move($uploadPath,$owlImageName);
        return $owlImageUrl;
    }

    public function saveProductMainImage($request) {
        $productImage=$request->file('product_image');
        $productImageName=$productImage->getClientOriginalName();
        $uploadPath='product-images/';
        $imageUrl=$uploadPath.$productImageName;
        $productImage->move($uploadPath,$productImageName);
        return $imageUrl;
    }

    private function uploadProductImage($request, $product_id) {
        if($files=$request->file('userfile')) {
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $uploadPath='product-sub-images/';
                $imageUrl=$uploadPath.$name;
                $file->move($uploadPath,$name);
                $productSubImage = new ProductSubImage();
                $productSubImage->product_id = $product_id;
                $productSubImage->product_sub_image = $imageUrl;
                $productSubImage->save();
            }
        }
    }

    public function saveProductInfo(Request $request) {
        $productId = $this->saveProductBasicInfo($request);
        $this->saveProductSizeWeight($request, $productId);
        $this->uploadProductImage($request, $productId);
        return redirect('/add-product')->with('message','Product Info Save Successfully');
    }

    public function manageProduct() {
        $allPublishedProducts = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->select('products.id', 'products.product_name','products.product_price', 'products.product_sku', 'products.publication_status', 'categories.category_name', 'sub_categories.sub_category_name')
            ->orderBy('products.id', 'desc')
            ->get();
        return view('admin.product.manage-product', ['allPublishedProducts'=>$allPublishedProducts]);
    }

    public function viewProductInfo($id) {
        $productById = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('product_size_widths', 'products.id', '=', 'product_size_widths.product_id')
            ->select('products.*', 'categories.category_name', 'sub_categories.sub_category_name', 'brands.brand_name')
            ->where('products.id', $id)
            ->first();
        $productSizeWidths = DB::table('product_size_widths')
            ->join('size_widths', 'product_size_widths.size_width_id', '=', 'size_widths.id')
            ->select('product_size_widths.*', 'size_widths.size_width_name')
            ->where('product_size_widths.product_id', $id)
            ->get();
        $productSubImagesById = DB::table('products')
            ->join('product_sub_images', 'products.id', '=', 'product_sub_images.product_id')
            ->select('products.id', 'product_sub_images.product_sub_image')
            ->where('products.id', $id)
            ->get();
        return view('admin.product.view-product', [
            'productById'=>$productById,
            'productSubImagesById'=>$productSubImagesById,
            'productSizeWidths'=>$productSizeWidths
        ]);
    }

    public function unpublishedProductInfo($id) {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();

        return redirect('/manage-product')->with('message', 'Product info unpublished successfully');
    }

    public function publishedProductInfo($id) {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();

        return redirect('/manage-product')->with('message', 'Product info published successfully');
    }

    public function editProductInfo($id) {
        $categories=Category::where('publication_status',1)->get();
        $subCategories=SubCategory::where('publication_status',1)->get();
        $brands=Brand::where('publication_status',1)->get();
        $sizeWidths = SizeWidth::where('publication_status',1)->get();

        $productById = Product::find($id);
        //return $productById;

        $productSizeWidths = DB::table('product_size_widths')
            ->join('size_widths', 'product_size_widths.size_width_id', '=', 'size_widths.id')
            ->select('product_size_widths.product_id', 'product_size_widths.size_width_id', 'size_widths.size_width_name')
            ->where('product_size_widths.product_id', $id)
            ->get();

        $productSubImages = ProductSubImage::where('product_id', $id)->get();

        return view('admin.product.edit-product', [
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'brands'=>$brands,
            'sizeWidths'=>$sizeWidths,
            'productById' => $productById,
            'productSizeWidths' => $productSizeWidths,
            'productSubImages' => $productSubImages
        ]);
    }


    private function updateProductBasicInfo($request) {
        $product = Product::find($request->product_id);
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_color = $request->product_color;
        $product->product_country  = $request->product_country;
        $product->product_sku = $request->product_sku;
        $product->product_price = $request->product_price;
        $product->discount_product_amount=$request->discount_product_amount;
        $product->discount_product_price=$request->discount_product_price;
        $product->top_left_one = $request->top_left_one;
        $product->top_left_two = $request->top_left_two;
        $product->top_right_one = $request->top_right_one;
        $product->top_right_two = $request->top_right_two;
        $product->carousel_slider = $request->carousel_slider;
        $product->top_product_status = $request->top_product_status;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        if($request->top_image) {
            unlink($product->top_image);
            $product->top_image = $this->saveProductToplImage($request);
        }
        if($request->owl_carousel_image) {
            unlink($product->owl_carousel_image);
            $product->owl_carousel_image = $this->saveProductOwlCarouselImage($request);
        }
        if($request->product_image) {
            unlink($product->product_image);
            $product->product_image = $this->saveProductMainImage($request);
        }
        $product->publication_status=$request->publication_status;
        $product->save();
    }
    public function updateProductSizeWeight($request) {
        DB::table('product_size_widths')
            ->where('product_id', $request->product_id)
            ->delete();
        foreach ($request->size_width_id as $selectedOption) {
            $productSizeWidth =new ProductSizeWidth();
            $productSizeWidth->product_id = $request->product_id;
            $productSizeWidth->size_width_id = $selectedOption;
            $productSizeWidth->save();
        }
    }

    public function updateProductInfo(Request $request) {
        //return $request->all();
        $this->updateProductSizeWeight($request);
        $this->updateProductBasicInfo($request);
        if($request->userfile) {
            $productSubImages = ProductSubImage::where('product_id', $request->product_id)->get();
            foreach ($productSubImages as $productSubImage) {
                unlink($productSubImage->product_sub_image);
                $productSubImage->delete();
            }
            $this->uploadProductImage($request, $request->product_id);
        }
        return redirect('/manage-product')->with('message', 'Product info update successfully');
    }

    public function deleteProductInfo($id) {
        $productById = Product::find($id);
        $productById->delete();
        unlink($productById->top_image );
        unlink($productById->owl_carousel_image );
        unlink($productById->product_image  );
        $productSubImages = ProductSubImage::where('product_id', $id)->get();

        foreach ($productSubImages as $productSubImage){
            $productSubImage->delete();
            unlink($productSubImage->product_sub_image);
        }

        $productSizeWidths = ProductSizeWidth::where('product_id', $id)->get();
        foreach ($productSizeWidths as $productSizeWidth) {
            $productSizeWidth->delete();
        }

        return redirect('/manage-product')->with('message', 'Product info delete successfully');
    }




    public function selectSubCategoryByCategoryId($id) {
        $subCategoriesByCategoryId= SubCategory::where('category_id', $id)->get();
        echo view('admin.product.sub-category-content', ['subCategoriesByCategoryId'=>$subCategoriesByCategoryId]);
    }
}
