@extends('admin.admin_master')
@section('body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Category Name</th>
                      <th>Category Description</th>
                      <th>Category Image</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr. No</th>
                      <th>Brand Name</th>
                      <th>Brand Description</th>
                      <th>Brand Image</th>
                      <th>Publication Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @php($i = 1)
                     @foreach($brands as $brand)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$brand->brand_name}}</td>
                      <td>{{$brand->brand_description}}</td>
                      <td><img src="{{asset($brand->brand_image)}}" alt="" height="50" width="70"/></td>
                      <td>{{$brand->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                      <td>
                           <a href="{{URL::to('/brand-edit/'.$brand->id )}}" class="btn btn-success">
                              <i class="fa fa-edit"></i>
                           </a>
                           <a href="{{URL::to('/brand-delete/'.$brand->id )}}" class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                           </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        

      
@endsection