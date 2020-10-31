<?php

namespace App\Http\Controllers;
Use Session;
session_start();
use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    public function addBrand()
    {
        $this->authCheck();
        return view('admin.brand.add_brand');
    }
    public function newBrand(Request $request)
    {
        
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;

        
            $image = $request->file('brand_image');

            if($image)
            {
                $imageName = $image->getClientOriginalName();
                $directory = './brand-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                $brand->brand_image = $imageUrl;

            }
            else
            {
                $brand->brand_image ='';
            }
            
         $brand->save();
        return redirect()->back();

    }
    public function manageBrand()
    {
        $this->authCheck();
        $brands = Brand::all();
        
        
        return view('admin.brand.manage_brand',['brands'=>$brands]);
    }

    public function editBrand($id)
    {
        $brand = Brand::where('id',$id)->first();
        //return $brand;
        return view('admin.brand.edit_brand',['brand'=>$brand]);
    }
    public function updateBrand(Request $request)
    {
        $this->authCheck();
       
        $brand = Brand::find($request->brand_id);

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;

        
            $image = $request->file('brand_image');

            if($image)
            {
                if($brand->brand_image)
                {
                    unlink($brand->brand_image);
                }
                $imageName = $image->getClientOriginalName();
                $directory = './brand-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                

            }
            else
            {
                $imageUrl = $brand->brand_image;
            }

            $brand->brand_image = $imageUrl;
            
         $brand->save();
        return redirect()->back();
    }

    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        if($brand->brand_image)
                {
                    unlink($brand->brand_image);
                }
        
        $brand->delete();
        return redirect()->back();

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
