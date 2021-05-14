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


Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/admin', 'PagesController@admin')->middleware('admin');
Route::get('/show', 'PagesController@search');

Route::get('/ad/sell-car', 'AdController@create_car')->name('sell-car');
Route::get('/ad/sell-bike', 'AdController@create_bike')->name('sell-bike');
Route::get('/ad/sell-autopart', 'AdController@create_autopart')->name('sell-autopart');

Auth::routes();

Route::resource('ad', 'AdController');
Route::resource('autopart', 'AutopartController');
Route::resource('bike', 'BikeController');
Route::resource('car', 'CarController');
Route::resource('post', 'PostController');
Route::resource('product', 'ProductController');
Route::resource('review', 'ReviewController');
Route::resource('comment', 'CommentController');
Route::resource('buyerrequest', 'BuyerRequestController');
Route::resource('wishlist', 'WishlistController');

Route::get('product/search/{name?}', 'ProductController@search')->name('product.search');
// Route::get('product/search/{name?}', 'ProductController@search')->name('product.search');
Route::get('/filter', 'ProductController@filter')->name('product.filter');
Route::get('/sortby', 'ProductController@sortby')->name('product.sortby');
Route::get('/addtowishlist', 'WishlistController@addProductWishlist')->name('wishlist.addProductWishlist');
Route::get('/productcompare', 'ProductController@product_compare')->name('product.compare');


Route::get('/ads/all', 'AdController@all_ads')->name('ads.all');
Route::get('/approve/{id}', 'AdController@approve')->name('approve');


Route::get('/compare', 'ProductController@compare')->name('products.compare');
Route::post('/forgotpassword', 'ProfileController@forgotPassword')->name('forgot.password');
Route::get('/forgotpassword/reset', function () {
    return view('auth.forgot');
})->name('forgot.password.form');

Route::group(['middleware' => ['auth']], function () { 
    Route::get('/update/profile', 'PagesController@profileUpdate')->name('profile.update');
	Route::post('/profileUpdate', 'ProfileController@profileUpdate')->name('profileUpdate');
	Route::get('/payment/form', 'AdController@payment_form')->name('payment.form');
	Route::post ('/payment', 'AdController@payment')->name('payment');
});


// Route::get('/buyerrequest', 'ProductController@sortby')->name('product.sortby');