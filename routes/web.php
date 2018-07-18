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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('men', 'MenController');
Route::resource('women', 'WomenController');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => ['auth']], function () {
    Route::post('cart/{id}', 'CartsController@store')->name('carts.store');
    Route::get('cart/{id}', 'CartsController@store');
});







Route::get('carts', 'CartsController@index')->name('carts.index');
Route::redirect('cartss', '/')->name('carts.welcome');


Route::delete('discart/{id}', 'CartsController@destroy')->name('carts.discart');

Route::get('checkout', 'CheckoutController@index')->name('checkout.index');

Route::get('selectplan', 'SelectplanController@index')->name('selectplan.index');

Route::get('hotelselect', 'HotelselectController@index')->name('hotelselect.index');

Route::get('confirmation', 'ConfirmationController@index')->name('confirmation.index');

Route::get('payment', 'PaymentController@index')->name('payment.index');

Route::post('/contact', 'Confirmation2Controller@postIndex');
Route::post('/plan', 'Selectplan2Controller@postIndex');

?>