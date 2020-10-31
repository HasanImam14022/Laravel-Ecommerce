@extends('front.master')

@section('body')

        <!-- payment -->
				<div class="payment">
					<h2><b>Payment Method</b></h2>
					<ol>
					   <div class="column">
					      <li>
							<img href="" src="{{asset('/')}}front/images/pay2.png" alt="" height="100px" width="120px">
						  </li>
					   </div>
					   <div>
					      <li class="column">
							<img src="{{asset('/')}}front/images/pay5.jpg" alt="" height="100px" width="120px">
						  </li>
					   </div>
					      
					   <div class="column">
					      <li>
							<img src="{{asset('/')}}front/images/pay1.jpg" alt="" height="100px" width="120px">
						  </li>
					   </div>
						
						
						
						
					</ol>
					<form action="/order-place" method="post">
					@csrf
						 <h4><strong>Select your payment method</strong></h4></br>
						 <input type="radio" checked="checked" value="handcash" name="payment_method">Cash On Delivery</br>
						 <input type="radio"  value="bkash" name="payment_method">Bkash</br>
						 <input type="radio"  value="rocket" name="payment_method">Rocket</br>
						 <input type="submit" name="" class="btn btn-success" value="Done">
					</form>
				</div>
				<!-- //payment -->

@endsection