@extends('front.master')

@section('body')
<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="/">Home</a>
                    <i>|Brand Products</i>
                </li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{$brandName}}
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <!-- product left -->
        <div class="side-bar col-md-3">
            <div class="search-hotel">
                <h3 class="agileits-sear-head">Search Here..</h3>
                <form action="#" method="post">
                    <input type="search" placeholder="Product name..." name="search" required="">
                    <input type="submit" value=" ">
                </form>
            </div>
           
            <!-- food preference -->
            
            <!-- //food preference -->
            <!-- discounts -->
            
            <!-- //discounts -->
            <!-- reviews -->
            
            <!-- //reviews -->
            <!-- cuisine -->
            <div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head"><marquee>Special Categories</marquee></h3>
					@foreach($categories as $category)
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="{{asset($category->category_image)}}" alt="" height="80px" width="60px">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>{{$category->category_name}}</h3>
							<a href="single.html">$18.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					@endforeach
					
				</div>
            <!-- //cuisine -->
            <!-- deals -->
            <!-- brands -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head"><marquee>Special Brands</marquee></h3>
					@foreach($brands as $brand)
					<div class="special-sec1">
						<div class="col-xs-4 img-deals">
							<img src="{{asset($brand->brand_image)}}" alt="" height="80px" width="60px">
						</div>
						<div class="col-xs-8 img-deal1">
							<h3>{{$brand->brand_name}}</h3>
							<a href="single.html">$18.00</a>
						</div>
						<div class="clearfix"></div>
					</div>
					@endforeach
					
				</div>
            <!-- //deals -->
        </div>
        <!-- //product left -->
        <!-- product right -->
        <div class="agileinfo-ads-display col-md-9 w3l-rightpro">
            <div class="wrapper">
                <!-- first section -->
					<div class="product-sec1">
                      @foreach($products as $product)
						<div class="col-xs-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset($product->product_image)}}" alt="" height="150px" width="120px">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{URL::to('productDetails',['id' => $product->id])}}" class="link-product-add-cart">Quick View</a>
										</div>
									</div>
									<span class="product-new-top">{{($product->is_featured == 1) ? 'New' : 'Old'}}</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{URL::to('productDetails',['id' => $product->id])}}">{{$product->product_name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{$product->product_price}}</span>
										<del>$1020.00</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="Zeeba Basmati Rice - 5 KG" />
												<input type="hidden" name="amount" value="950.00" />
												<input type="hidden" name="discount_amount" value="1.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
						{{$products->links()}}
                <!-- //first section -->

            </div>
        </div>
        <!-- //product right -->
    </div>
</div>
<!-- //top products -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Special Offers
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
             @foreach($products2 as $product2)
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single.html">
                                <img src="{{asset($product2->product_image)}}" alt="" height="150px" width="120px">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="{{URL::to('productDetails',['id' => $product->id])}}">{{$product2->product_name}}</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>BDT-{{$product2->product_price}} Tk.</h6>
                                <p>Save $40.00</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                        <input type="hidden" name="amount" value="220.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- //special offers -->
@endsection
