<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
     {
         $products   = Product::where('publications_status',1)->get();
         $categories = Category::where('publication_status',1)->get();

         return view('front.home.index',
         [
             'products'   => $products,
             'categories' => $categories
         ]);
     }

     public function categoryDetails($id)
     {
         $products    = Product::where('category_id',$id)->orderBy('id','DESC')->get();
        $categories   = Category::where('publication_status',1)->get();
        $categoryName = Category::find($id)->category_name;

         return view('front.category.category_details',
         [
            'products'     => $products,
            'categories'   => $categories,
            'categoryName' => $categoryName
            
         ]);
     }

     public function productDetail($id)
     {
         $product          = Product::find($id);
         $categoryProducts = Product::where('category_id',$product->category_id)->orderBy('id','DESC')->get();
         $categories       = Category::where('publication_status',1)->get();

         return view('front.product.product_details',
         [
             'product'          => $product,
             'categories'       => $categories,
             'categoryProducts' => $categoryProducts
             
         ]);
         
     }
}
