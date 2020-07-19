@extends('admin.admin_master')
@section('body')


<div class="row">
        <div class="col-md-12">
           <div class="panel panel-primary">
              <div class="panel-heading">
                 <h2><b>Update Product</b></h2>
              </div>
              <div class="panel-body">
                 
                 <form  action="/product-update" method="POST" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                        <label class="col-md-3"><b>Product Name :</b></label>
                         <div class="col-md-9">

                           <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}"/>
                           <input type="hidden" class="form-control" name="product_id" value="{{$product->id}}"/>
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
                           <input type="text" class="form-control" name="product_code" value="{{$product->product_code}}"/>
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Price :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}"/>
                        </div>
                     </div>
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Product Quantity :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="product_quantity" value="{{$product->product_quantity}}"/>
                        </div>
                     </div>

                     <div class="form-group">
                        <label class="col-md-3"><b>Product Short Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="product_short_description" >{{$product->product_short_description}}</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Product Long Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="product_long_description" >{{$product->product_long_description}}</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Product Image :</b></label>
                        <div class="col-md-3">
                           <input type="file"  class="form-control-file" name="product_image" />
                           <img src="{{asset($product->product_image)}}" alt="" height="70" width="90">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Publication Status :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="publications_status" value="1" {{$product->publications_status == 1 ? 'checked' : ''}}/>Published
                           <input type="radio"  name="publications_status" value="0" {{$product->publications_status == 0 ? 'checked' : ''}}/>Unpublished
                        </div>
                     </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Is Featured :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="is_featured" value="1" {{$product->is_featured == 1 ? 'checked' : ''}}/>New
                           <input type="radio"  name="is_featured" value="0" {{$product->is_featured == 0 ? 'checked' : ''}}/>Old
                        </div>
                     </div>
                     <div class="form-group">
                        
                        <div class="col-md-3">
                           
                           <input type="submit"  value="Update"  class="btn btn-success"  data-toggle="modal" data-target="#updateModal"/>
                        </div>   
                        
                     </div>
                 </form>
                 </div>
                 
              </div>
              
           </div>
       
     </div>

@endsection
