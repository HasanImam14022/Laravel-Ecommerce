<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use AdminsController;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add_category');
    }
    public function newCategory(Request $request)
    {
        
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;

        
            $image = $request->file('category_image');

            if($image)
            {
                $imageName = $image->getClientOriginalName();
                $directory = './category-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                $category->category_image = $imageUrl;

            }
            else
            {
                $category->category_image ='';
            }
            
         $category->save();
        return redirect()->back()->with('message','Category saved');

    }

    public function manageCategory()
    {
        $categories = Category::all();
        
        return view('admin.category.manage_category',['categories'=>$categories]);
    }

    public function editCategory($id)
    {
        $category = Category::where('id',$id)->first();
        //return $category;
        return view('admin.category.edit_category',['category'=>$category]);
    }
    public function updateCategory(Request $request)
    {

       
        $category = Category::find($request->category_id);

        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;

        
            $image = $request->file('category_image');

            if($image)
            {
               
                if($category->category_image)
                {
                    unlink($category->category_image);
                }
                
                $imageName = $image->getClientOriginalName();
                $directory = './category-images/';
                $image->move($directory,$imageName);
                $imageUrl = $directory.$imageName;
                

            }
            else
            {
                
                $imageUrl = $category->category_image;
            }

            $category->category_image = $imageUrl;
            
         $category->save();
        return redirect()->back();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);

            if($category->category_image)
                {
                    unlink($category->category_image);
                }
        $category->delete();
        return redirect()->back();

    }

}
