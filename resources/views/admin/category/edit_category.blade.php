@extends('admin.admin_master')
@section('body')


<div class="row">
        <div class="col-md-12">
           <div class="panel panel-primary">
              <div class="panel-heading">
                 <h2><b>Update Category</b></h2>
              </div>
              <div class="panel-body">
                 
                 <form  action="/category-update" method="POST" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Category Name :</b></label>
                         
                        
                        <div class="col-md-9">

                           <input type="text" class="form-control" name="category_name" value="{{$category->category_name}}"/>
                           <input type="hidden" class="form-control" name="category_id" value="{{$category->id}}"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Category Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="category_description" >{{$category->category_description}}</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Category Image :</b></label>
                        <div class="col-md-3">
                           <input type="file"  class="form-control-file" name="category_image" />
                           <img src="{{ asset($category->category_image)}}" alt="" height="70" width="90">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Publication Status :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="publication_status" value="1" {{$category->publication_status == 1 ? 'checked' : ''}}/>Published
                           <input type="radio"  name="publication_status" value="0" {{$category->publication_status == 0 ? 'checked' : ''}}/>Unpublished
                        </div>
                     </div>
                     <div class="form-group">
                        
                        <div class="col-md-3">
                           
                           <input type="submit"  value="Update"  class="btn btn-success" />
                        </div>   
                        
                     </div>
                 </form>
                 </div>
                 
              </div>
              
           </div>
       
     </div>

@endsection
