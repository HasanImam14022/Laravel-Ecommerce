@extends('admin.admin_master')
@section('body')


<div class="row">
        <div class="col-md-12">
           <div class="panel panel-primary">
              <div class="panel-heading">
                 <h2><b>Add Brand</b></h2>
              </div>
              <div class="panel-body">
                 
                 <form  action="/new-brand" method="POST" enctype="multipart/form-data">
                 @csrf
                     <div class="form-group">
                         
                          <label class="col-md-3"><b>Brand Name :</b></label>
                         
                        
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="brand_name" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Brand Description :</b></label>
                        <div class="col-md-9">
                           <textarea  class="form-control" name="brand_description" ></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Brand Image :</b></label>
                        <div class="col-md-3">
                           <input type="file"  class="form-control-file" name="brand_image" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-3"><b>Publication Status :</b></label>
                        <div class="col-md-3">
                           <input type="radio"  name="publication_status" checked="checked" value="1"/>Published
                           <input type="radio"  name="publication_status" value="0"/>Unpublished
                        </div>
                     </div>
                     <div class="form-group">
                        
                        <div class="col-md-3">
                           <input type="reset" value="Cancel"  class="btn btn-danger"/>
                           <input type="submit"  value="Add brand"  class="btn btn-success"/>
                        </div>
                     </div>
                 </form>
                 </div>
                 
              </div>
              
           </div>
       
     </div>

@endsection
