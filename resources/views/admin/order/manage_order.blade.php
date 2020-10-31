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
                      <th>Order Id</th>
                      <th>Customer Name</th>
                      <th>Total Price</th>
                      <th>Payment Status</th>
                     
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr. No</th>
                      <th>Order Id</th>
                      <th>Customer Name</th>
                      <th>Total Price</th>
                      <th>Payment Status</th>
                      
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @php($i = 1)
                     @foreach($all_order_info as $order_info)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$order_info->order_id}}</td>
                      <td>{{$order_info->customer_name}}</td>
                      <td>{{$order_info->order_total}}</td>
                      <td>{{$order_info->payment_status}}</td>
                      <td>
                           <a href="{{URL::to('/view-order/'.$order_info->order_id)}}" class="btn btn-success">
                              <i class="fa fa-edit"></i>
                           </a>
                           <a href="#" class="btn btn-danger" >
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