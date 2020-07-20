<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.add_product',[
            'categories' => $categories,
            'brands'     => $brands,
        ]);
    }
    public function newProduct(Request $request)
    {
        
        
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->publications_status = $request->publications_status;
        $product->is_featured = $request->is_featured;

        
            $image = $request->file('product_image');

            if($image)
            {
                $imageName = $image->getClientOriginalName();
                $directory = './product-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                $product->product_image = $imageUrl;

            }
            else
            {
                $product->product_image ='';
            }
            
            
         $product->save();
         
         
        return redirect()->back()->with('message','Category saved');

    }
    public function manageProduct()
    {
        
        $products = Product::orderBy('id','DESC')->take(100)->get();
        return view('admin.product.manage_product',['products'=>$products]);
    }
    public function editProduct($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        
        $product = Product::where('id',$id)->first();
        //return $brand;
        return view('admin.product.edit_product',
        [
            'product'=>$product,
            'categories' => $categories,
            'brands'     => $brands,
            
            ]);
    }
    public function updateProduct(Request $request)
    {

       
        $product = Product::find($request->product_id);
       

        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->publications_status = $request->publications_status;
        $product->is_featured = $request->is_featured;

        
            $image = $request->file('product_image');

            if($image)
            {
                if($product->product_image)
                {
                    unlink($product->product_image);
                }
                
                $imageName = $image->getClientOriginalName();
                $directory = './product-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                

            }
            else
            {
                $imageUrl = $product->product_image;
            }

            $product->product_image = $imageUrl;
            
         $product->save();
        return redirect()->back();
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();

    }
}
