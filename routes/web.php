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

use Illuminate\Support\Facades\Route;


Route::middleware(['web'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::resource('diet', 'Admin\DietController');
        Route::resource('dish', 'Admin\DishController');
        Route::resource('day', 'Admin\DayController');
        Route::resource('eating', 'Admin\EatingController');
        Route::resource('eating_type', 'Admin\EatingTypeController');
        Route::resource('category', 'Admin\CategoryController');
        Route::resource('feedback', 'Admin\FeedbackController')->only(['index', 'show']);
        Route::resource('order', 'Admin\OrderController')->only(['index', 'show']);

        Route::prefix('diet')->group(function () {
            Route::get('copy/{id}', add_controller_ns('DietController@copy'))->name("diet.copy");
        });

        Route::prefix('dish')->group(function () {
            Route::get('copy/{id}', add_controller_ns('DishController@copy'))->name("dish.copy");
        });
    });

});

//Cart routes
Route::match(array('GET', 'POST'),'cart-add/{id}/{days_count}', 'CartController@set')->name('cart.set');
Route::post('cart-remove/{id}', 'CartController@remove')->name('cart.remove');
Route::post('cart-clear', 'CartController@clear')->name('cart.clear');
Route::get('cart', 'CartController@index')->name('cart.index');
Route::get('cart-get', 'CartController@get')->name('cart.get');
Route::get('cart-get-json', 'CartController@getJsonData')->name('cart.get_json');

Route::prefix('catalog')->group(function () {
    Route::get('', 'CatalogController@index')->name('catalog');
    Route::get("{url}", 'CatalogController@show')->where('url', '[A-Za-z0-9/-]+')->name('catalog.show');
});

// Feedback Form
Route::post('/feedback/store', 'FeedbackController@store')->name('feedback.store');

// Order Form on cart page
Route::post('/order/store', 'OrderController@store')->name('order.store');

Route::get('{url?}', 'PageController@show')->where('url', '[A-Za-z0-9/-]+')->name('page.show');