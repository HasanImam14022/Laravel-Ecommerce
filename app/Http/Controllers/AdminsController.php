<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use category;
use Session;
session_start();

class AdminsController extends Controller
{
    public function index()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id == NULL)
        {
            return view('admin.admin');
        }
        else
        {
            return redirect('/dashboard')->send();
        }
        
        return view('admin.admin');
    }
    function adminLoginCheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('tbl_admin')
                ->where('email',$email)
                ->where('password',md5($password))
                ->first();

                if($result)
                {
                   
                    Session::put('admin_id',$result->admin_id);
                    //Session::put('admin_name',$result->name);
                    return redirect('/dashboard');
                }
                else
                {

                    Session::put('error','User Id or Password Incorrect!');
                    return redirect('/adminLogin');
                }
        
    }
}
