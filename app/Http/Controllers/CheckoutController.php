<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;


class CheckoutController extends Controller
{
    public function loginCheck()
    {
        $categories   = Category::where('publication_status',1)->get();
        return view('front.customer.login',[
            'categories'      => $categories
        ]);
    }
    public function customerRegistration(Request $request)
    {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['password'] = $request->password;
        $data['mobile_number'] = $request->mobile_number;

       
        
        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_email',$customer_email);
        return Redirect('/checkout');
    }

    public function checkout()
    {
       
        $cartCollection = Cart::getContent();
        $categories   = Category::where('publication_status',1)->get();
        return view('front.customer.checkout', [
            'categories'      => $categories,
            'cartCollection'  => $cartCollection
        ]);
       
    }
    public function customerSignin(Request $request)
    {
        $customer_name = $request->customer_name;
        $password = $request->password;

        $result = DB::table('tbl_customer')
                ->where('customer_name',$customer_name)
                ->where('password',$password)
                ->first();

                var_dump($result);

                if($result)
                {
                   
                    Session::put('customer_id',$result->customer_id);
                    //Session::put('admin_name',$result->name);
                    return redirect('/checkout');
                }
                else
                {

                    Session::put('error','Customer Name or Password Incorrect!');
                    return redirect('/login-check');
                }
        
    }

    public function customerSignout()
    {
        Session::flush();
        return redirect('/login-check');

    }
    public function saveShippingDetails(Request $request)
    {
        $data = array();
        $data['shipping_first_name'] = $request->shipping_first_name;
        $data['shipping_last_name'] = $request->shipping_last_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_mobile_number'] = $request->shipping_mobile_number;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_city'] = $request->shipping_city;

       
        
        $shipping_id = DB::table('shipping')->insertGetId($data);
        Session::put('customer_id',$shipping_id);
        //Session::put('customer_email',$customer_email);
        return Redirect('/payment');
    }

}
