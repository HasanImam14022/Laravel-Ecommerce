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
					 <div >
					 <a  href="#" class="btn btn-success btn-lg" role="button" aria-disabled="true">Checkout</a>
					 </div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- //checkout page -->
            
        </div>
       
    </div>
</div>

@endsection
