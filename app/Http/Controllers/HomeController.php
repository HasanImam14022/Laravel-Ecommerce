<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Brand;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
     {
         $products   = Product::where('publications_status',1)->paginate(12);
         //$products3   = Product::where('publications_status',1)->get();
         $categories = Category::where('publication_status',1)->get();
         $brands     = Brand::where('publication_status',1)->get();

         return view('front.home.index',
         [
             'products'   => $products,
             //'products3'   => $products3,
             'categories' => $categories,
             'brands'     => $brands
         ]);
     }

     public function categoryDetails($id)
     {
         $products    = Product::where('category_id',$id)->paginate(12);
         $products2    = Product::where('category_id',$id)->get();
        $categories   = Category::where('publication_status',1)->get();
        $categoryName = Category::find($id)->category_name;
        $brands     = Brand::where('publication_status',1)->get();

         return view('front.category.category_details',
         [
            'products'     => $products,
            'products2'     => $products2,
            'categories'   => $categories,
            'categoryName' => $categoryName,
            'brands'     => $brands
            
         ]);
     }

     public function brandDetails($id)
     {
        $products    = Product::where('brand_id',$id)->paginate(12);
        $products2    = Product::where('brand_id',$id)->get();
       $categories   = Category::where('publication_status',1)->get();
       $brandName = Brand::find($id)->brand_name;
       $brands     = Brand::where('publication_status',1)->get();

        return view('front.brand.brand_details',
        [
           'products'     => $products,
           'products2'     => $products2,
           'categories'   => $categories,
           'brandName' => $brandName,
           'brands'     => $brands
           
        ]);
     }

     public function productDetail($id)
     {
         $product          = Product::find($id);
         $categoryProducts = Product::where('category_id',$product->category_id)->get();
         $categories       = Category::where('publication_status',1)->get();

         return view('front.product.product_details',
         [
             'product'          => $product,
             'categories'       => $categories,
             'categoryProducts' => $categoryProducts
             
         ]);
         
     }
}
