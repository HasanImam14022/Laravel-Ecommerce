@extends('admin.admin_master')
@section('body')


<div class="row">
        <div class="col-md-12">
           <div class="panel panel-primary">
              <div class="panel-heading">
                 <h2><b>Update Category</b></h2>
              </div>
              <div class="panel-body">
                 
                 <form  action="/brand-update" method="POST" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Brand Name :</b></label>
                         
                        
                        <div class="col-md-9">

                           <input type="text" class="form-control" name="brand_name" value="{{$brand->brand_name}}"/>
                           <input type="hidden" class="form-control" name="brand_id" value="{{$brand->id}}"/>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Brand Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="brand_description" >{{$brand->brand_description}}</textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Brand Image :</b></label>
                        <div class="col-md-3">
                           <input type="file"  class="form-control-file" name="brand_image" />
                           <img src="{{asset($brand->brand_image)}}" alt="" height="70" width="90">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Publication Status :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="publication_status" value="1" {{$brand->publication_status == 1 ? 'checked' : ''}}/>Published
                           <input type="radio"  name="publication_status" value="0" {{$brand->publication_status == 0 ? 'checked' : ''}}/>Unpublished
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
