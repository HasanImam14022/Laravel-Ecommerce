<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
       $cartProduct = Product::find( $request->product_id);

       Cart::add([
        'id'             => $cartProduct->id,
        'name'           => $cartProduct->product_name,
        'price'          => $cartProduct->product_price,
        'quantity'       => $request->qty,
        'attributes'     => [
            'image'      => $cartProduct->product_image,
            'code'       => $cartProduct->product_code,
        ]
       ]);
       //$categories   = Category::where('publication_status',1)->get();
          return redirect()->action('CartController@showCart');
          
    }

    public function showCart()
    {

        $cartCollection = Cart::getContent();
        $categories   = Category::where('publication_status',1)->get();
        return view('front.cart.show-cart', [
            'categories'      => $categories,
            'cartCollection'  => $cartCollection
        ]);
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->id, [

            'quantity' => [
                'relative' => false,
                   'value' => $request->qty

            ]] );
          
         return redirect()->back();
    }
    public function deleteCart($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
