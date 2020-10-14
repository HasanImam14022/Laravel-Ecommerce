@extends('front.master')

@section('body')

<div class="ads-grid">
    <div class="container">
       
        <div class="col-md-12">
            
        <div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Products In Cart
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Your shopping cart contains:
					<span>{{$cartCollection->count()}} Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
                                <th>Product Name</th>
								<th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Sub Total</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
						@php($subTotal = 0)
                        @php($i = 1)
                        @foreach($cartCollection as $item)
							<tr class="rem1">
								<td class="invert">{{$i++}}</td>
								<td>
									
									<img src="{{asset($item->attributes->image)}}" alt=" " height="70" width="50" >
								
								</td>
                                <td class="invert">{{$item->name}}</td>
								<td class="invert">
									<form action="/update-cart-product" method="post">
                                    @csrf
                                         <input type="number" min="1" name="qty" value="{{$item->quantity}}" />
                                         <input type="hidden" name="id" value="{{$item->id}}" />
                                         <input type="submit" name="btn" value="submit"/>
                                    </form>
								</td>
								
								<td class="invert">{{$item->price}}Tk.</td>
                                <td class="invert">{{$itemTotal=$item->price * $item->quantity}}Tk.</td>
								<td class="invert">
									<div class="rem">
									    <a class="close1" href="{{URL::to('delete-cart-item',['id'=>$item->id])}}"></a>
										
									</div>
								</td>
							</tr>
							<?php
							 $subTotal = $subTotal + $itemTotal;
							?>
							@endforeach
							
							    
							
						</tbody>
					
					</table>
				</div>
				<div class="table-responsive">
				     <table class="timetable_sub">
					    <tr>
						     <td><b>Total Price</b></td>
							 <td><b>{{$subTotal}}Tk.</b></td>
						</tr>
						
					 </table>
					 
				</div>
			</div>
			
		</div>
	</div>
	<div class="checkout-left">
				<div class="address_form_agile">
					<h4>Add a new Details</h4>
					<form action="/save-shipping-details" method="post" class="creditly-card-form agileinfo_form">
					@csrf
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									
									<div class="controls">
										<input class="billing-address-name" type="text" name="shipping_first_name" placeholder="First Name" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="text" name="shipping_last_name" placeholder="Last Name" required="">
									</div>
									<div class="controls">
										<input class="billing-address-name" type="email" name="shipping_email" placeholder="Email" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left">
											<div class="controls">
												<input type="text" placeholder="Mobile Number" name="shipping_mobile_number" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right">
										<div class="controls">
												<input type="text" placeholder="Address" name="shipping_address" required="">
											</div>
											<div class="controls">
												<input type="text" placeholder="City" name="shipping_city" required="">
											</div>
										</div>
										<div class="clear"> </div>
									</div>
									
								</div>
								<button class="submit check_out">Delivery to this Address</button>
							</div>
						</div>
					</form>
					<div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="fa fa-hand-o-right" aria-hidden="true"></span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
            
        </div>
       
    </div>
</div>

@endsection
