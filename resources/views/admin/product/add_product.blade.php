@extends('admin.admin_master')
@section('body')


<div class="row">
        <div class="col-md-12">
           <div class="panel panel-primary">
              <div class="panel-heading">
                 <h2><b>Add Product</b></h2>
              </div>
              <div class="panel-body">
                 
                 <form  action="/new-product" method="POST" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Name :</b></label>
                         
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_name" />
                        </div>
                     </div>

                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Category Name :</b></label>
                         
                        <div class="col-md-3">
                           <select class="form-control" name="category_id">
                               <option>---Select Category Name---</option>
                               @foreach($categories as $category)
                            
                               <option value="{{$category->id}}">{{$category->category_name}}</option>
                               @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Brand Name :</b></label>
                         
                        
                        <div class="col-md-3">
                        <select class="form-control" name="brand_id">
                               <option >---Select Brand Name---</option>
                               @foreach($brands as $brand)
                            
                               <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                               @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Code :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_code" />
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Price :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_price" />
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Quantity :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_quantity" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Product Short Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="product_short_description" ></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Product Long Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="product_long_description" ></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Product Image :</b></label>
                        <div class="col-md-3">
                           <input type="file"  class="form-control-file" name="product_image" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Publication Status :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="publications_status" checked="checked" value="1"/>Published
                           <input type="radio"  name="publications_status" value="0"/>Unpublished
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Is Featured :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="is_featured" checked="checked" value="1"/>New
                           <input type="radio"  name="is_featured" value="0"/>Old
                        </div>
                     </div>
                     <div class="form-group">
                        
                        <div class="col-md-3">
                           <input type="reset" value="Cancel"  class="btn btn-danger"/>
                           <input type="submit"  value="Add Product"  class="btn btn-success"/>
                        </div>
                     </div>
                 </form>
                 </div>
                 
              </div>
              
           </div>
       
     </div>

@endsection
