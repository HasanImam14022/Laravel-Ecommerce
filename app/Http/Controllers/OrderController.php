<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Category;
Use Session;
session_start();
use DB;
use Illuminate\Support\Facades\Redirect;
use Cart;

class OrderController extends Controller
{
    public function orderManage()
    {
        $this->authCheck();
        $all_order_info=DB::table('order')
                        ->join('tbl_customer','order.customer_id','=','tbl_customer.customer_id')
                        ->select('order.*','tbl_customer.customer_name')
                        ->get();
                        return view('admin.order.manage_order',['all_order_info'=>$all_order_info]);                
                       
    }

    public function orderView($id)
    {
        $this->authCheck();
        
        $order_by_id=DB::table('order')
                        
                        ->join('tbl_customer','order.customer_id','=','tbl_customer.customer_id')
                        ->join('shipping','order.shipping_id','=','shipping.shipping_id')
                        ->join('order_details','order_details.order_id','=','order.order_id')
                        ->where('order.order_id',$id)
                        ->get();

                        
                        
                       return view('admin.order.view-order',['order_by_id'=>$order_by_id]);
                        

                        //echo "<pre>";
                        // print_r($order_by_id);
                        // echo "</pre>";
                       // return view('admin.order.view_order',['order_by_id'=>$order_by_id]); 
    }
    private function authCheck()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id != NULL)
        {
            return;
        }
        else
        {
            return redirect('/adminLogin')->send();
        }
    }
    
}
