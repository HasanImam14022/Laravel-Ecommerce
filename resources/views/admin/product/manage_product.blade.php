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
                      <th>Product Name</th>
                      <th>Category Name</th>
                      <th>Brand Name</th>
                      <th>Product Code</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                      <th>Product Image</th>
                      <th>Publication Status</th>
                      <th>Is Featured</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Sr. No</th>
                      <th>Product Name</th>
                      <th>Category Name</th>
                      <th>Brand Name</th>
                      <th>Product Code</th>
                      <th>Product Price</th>
                      <th>Product Quantity</th>
                      <th>Product Image</th>
                      <th>Publication Status</th>
                      <th>Is Featured</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @php($i = 1)
                     @foreach($products as $product)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$product->product_name}}</td>
                      <td>{{$product->category->category_name}}</td>
                      <td>{{$product->brand->brand_name}}</td>
                      <td>{{$product->product_code}}</td>
                      <td>{{$product->product_price}}</td>
                      <td>{{$product->product_quantity}}</td>
                      <td><img src="{{asset($product->product_image)}}" alt="" height="50" width="70"/></td>
                      <td>{{$product->publications_status == 1 ? 'Published' : 'Unpublished'}}</td>
                      <td>{{$product->is_featured == 1 ? 'New' : 'Old'}}</td>
                      <td>
                           <a href="{{URL::to('/product-edit/'.$product->id )}}" class="btn btn-success">
                              <i class="fa fa-edit"></i>
                           </a>
                           <a href="{{URL::to('/product-delete/'.$product->id )}}" class="btn btn-danger">
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