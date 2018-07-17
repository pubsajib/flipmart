<?php

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

Route::get('/404', function () { return view('pages.404'); });
Route::get('/blog-details', function () { return view('pages.blog-details'); });
Route::get('/blog', function () { return view('pages.blog'); });
Route::get('/category', function () { return view('pages.category'); });
Route::get('/checkout', function () { return view('pages.checkout'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/detail', function () { return view('pages.detail'); });
Route::get('/faq', function () { return view('pages.faq'); });
Route::get('/home', function () { return view('pages.home'); });
Route::get('/index', function () { return view('pages.index'); });
Route::get('/my-wishlist', function () { return view('pages.my-wishlist'); });
Route::get('/product-comparison', function () { return view('pages.product-comparison'); });
Route::get('/shopping-cart', function () { return view('pages.shopping-cart'); });
Route::get('/sign-in', function () { return view('pages.sign-in'); });
Route::get('/terms-conditions', function () { return view('pages.terms-conditions'); });
Route::get('/track-orders', function () { return view('pages.track-orders'); });
Route::get('/login', function () { return view('pages.sign-in'); });
// Route::group(array('prefix' => 'foo'), function(){})
Route::group(array('prefix' => 'backdoor'), function(){
	Route::get('/', function () { return view('admin.tables'); });
	Route::resource('products','ProductController');
});
Route::get('/', function () {return view('pages.home'); });

Auth::routes();

// Route::get('/', function () {return view('welcome'); });
// Route::get('/home', 'HomeController@index')->name('home');
