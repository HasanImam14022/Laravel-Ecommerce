<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');
Route::get('/categorydetail/{id}','HomeController@categoryDetails');
Route::get('/branddetail/{id}','HomeController@brandDetails');
Route::get('/productDetails/{id}','HomeController@productDetail');

//Admin Routes
Route::get('adminLogin','AdminsController@index');
Route::post('admin-login-check','AdminsController@adminLoginCheck');

//SuperAdmin Routes
Route::get('/dashboard','SuperAdminController@index'); 
Route::get('/logout','SuperAdminController@logout');

//for category
Route::get('/add-category','CategoryController@addCategory');
Route::post('/new-category','CategoryController@newCategory');
Route::get('/manage-category','CategoryController@manageCategory');
Route::get('/category-edit/{id}','CategoryController@editCategory');
Route::post('/category-update','CategoryController@updateCategory');
Route::get('/category-delete/{id}','CategoryController@deleteCategory');

//for brand
Route::get('/add-brand','BrandController@addBrand');
Route::post('/new-brand','BrandController@newBrand');
Route::get('/manage-brand','BrandController@manageBrand');
Route::get('/brand-edit/{id}','BrandController@editBrand');
Route::post('/brand-update','BrandController@updateBrand');
Route::get('/brand-delete/{id}','BrandController@deleteBrand');


//for product
Route::get('/add-product','ProductController@addProduct');
Route::post('/new-product','ProductController@newProduct');
Route::get('/manage-product','ProductController@manageProduct');
Route::get('/product-edit/{id}','ProductController@editProduct');
Route::post('/product-update','ProductController@updateProduct');
Route::get('/product-delete/{id}','ProductController@deleteProduct');

//for cart
Route::post('/add-to-cart','CartController@addToCart');
Route::get('/show-cart','CartController@showCart');
Route::post('/update-cart-product','CartController@updateCart');
Route::get('/delete-cart-item/{id}','CartController@deleteCart');

//for checkout
Route::get('/login-check','CheckoutController@loginCheck');
Route::post('/customer-registration','CheckoutController@customerRegistration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/customer-signin','CheckoutController@customerSignin');
Route::get('/customer-sign-out','CheckoutController@customerSignout');
Route::post('/save-shipping-details','CheckoutController@saveShippingDetails');



