@extends('front.master')
@section('title')
@endsection 
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
                    <i>|Product Details</i>
                </li>
                <
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Product Details Page
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="images/si.jpg">
                            <div class="thumb-image">
                                <img src="{{asset($product->product_image)}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>{{$product->product_name}}</h3>
            <div class="rating1">
                <span class="starRating">
                    <input id="rating5" type="radio" name="rating" value="5">
                    <label for="rating5">5</label>
                    <input id="rating4" type="radio" name="rating" value="4">
                    <label for="rating4">4</label>
                    <input id="rating3" type="radio" name="rating" value="3" checked="">
                    <label for="rating3">3</label>
                    <input id="rating2" type="radio" name="rating" value="2">
                    <label for="rating2">2</label>
                    <input id="rating1" type="radio" name="rating" value="1">
                    <label for="rating1">1</label>
                </span>
            </div>
            <p>
                <span class="item_price">{{$product->product_price}}</span>
                <del>TK.1300.00</del>
                <label>Free delivery</label>
            </p>
            <div class="single-infoagile">
                <ul>
                    <li>
                        {{$product->product_short_description}}
                    </li>
                    <li>
                         {{$product->product_quantity>0? "Product is Availavle":"Product is unavailable"}}
                    </li>
                    <li>
                        Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
                    </li>
                    <li>
                        1 offer from
                        <span class="item_price">Tk.950.00</span>
                    </li>
                </ul>
            </div>
            <div class="product-single-w3l">
                <p>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                    <label>Vegetarian</label> product.</p>
                <ul>
                    <li>
                      {{$product->product_long_description}}
                    </li>
                    
                </ul>
                <p>
                    <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                    <label>non-returnable.</label>
                </p>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="{{URL::to('add-to-cart')}}" method="post">
                        @csrf
                        <fieldset>
                            <input type="number" min="1" name="qty" value="1" class="form-control" /></br>
                            <input type="hidden" name="product_id" value="{{$product->id}}" />
                            <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                    </form>
                </div>

            </div>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //Single Page -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Other Products
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">
               @foreach($categoryProducts as $categoryProduct)
                <li>
                   
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="{{URL::to('productDetails',['id' => $product->id])}}">
                                <img src="{{asset($categoryProduct->product_image)}}" height="150px" width="130px" alt="">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="{{URL::to('productDetails',['id' => $product->id])}}">{{$categoryProduct->product_name}}</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>{{$categoryProduct->product_price}}Tk.</h6>
                                
                                <p>Save 40.00 Tk.</p>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="" method="post">
                                    <fieldset>
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="business" value=" " />
                                    <input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
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
                </li>
               @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- //special offers -->

@endsection 
