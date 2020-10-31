@extends('admin.admin_master')
@section('body')
    <!-- DataTales Example -->
    <div class="row col-md-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                
                
              </div>

            </div>
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary"><b>Customer Details</b></h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered" style="background:#D38779;text-align:center;"   width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><b>Customer Name</b></th>
                      <th><b>Mobile</b></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <td><b>{{$order_by_id[0]->customer_name}}</b></td>
                      <td><b>{{$order_by_id[0]->mobile_number}}</b></td>
                    </tr>
                    
                  </tbody>
                </table>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary"><b>Shipping Details</b></h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered" style="background:#4EC38E;text-align:center;"   width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><b>Customer Name</b></th>
                      <th><b>Shipping Mobile No</b></th>
                      <th><b>Address</b></th>
                      <th><b>City</b></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <tr>
                      <td><b>{{$order_by_id[0]->shipping_first_name." " }}{{$order_by_id[0]->shipping_last_name}}</b></td>
                      <td><b>{{$order_by_id[0]->shipping_mobile_number}}</b></td>
                      <td><b>{{$order_by_id[0]->shipping_address}}</b></td>
                      <td><b>{{$order_by_id[0]->shipping_city}}</b></td>
                    </tr>
                    
                  </tbody>
                </table>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary"><b>Order Details</b></h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered" style="background:#DFB371;text-align:center;"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th><b>Order Id</b></th>
                      <th><b>Product Name</b></th>
                      <th><b>Product Price</b></th>
                      <th><b>Product Sales Quantity</b></th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td><h4><b>Total Price</b></h4></td> <td colspan="3"><h4><b>{{$order_by_id[0]->order_total}}Tk.</b></h4></td>
                      
                    </tr>
                  </tfoot>
                 
                  <tbody>
                  
                  @foreach($order_by_id as $orderinfo)

                    <tr>
                      <td><b>{{$orderinfo->order_id}}</b></td>
                      <td><b>{{$orderinfo->product_name}}</b></td>
                      <td><b>{{$orderinfo->product_price}}</b></td>
                      <td><b>{{$orderinfo->product_sales_quantity}}</b></td>
                      
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      
  

      
@endsection