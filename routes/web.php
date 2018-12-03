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
        Route::get('feedback', 'Admin\FeedbackController@index')->name('feedback.index');

        Route::prefix('diet')->group(function () {
            Route::get('copy/{id}', add_controller_ns('DietController@copy'))->name("diet.copy");
        });

        Route::prefix('dish')->group(function () {
            Route::get('copy/{id}', add_controller_ns('DishController@copy'))->name("dish.copy");
        });
    });

});

//todo изменение состояния пусть будет post потом
Route::get('cart-add/{id}/{days_count}', 'CartController@add')->name('cart.add');
Route::get('cart', 'CartController@index')->name('cart.index');
Route::get('cart-get', 'CartController@get')->name('cart.get');

Route::prefix('catalog')->group(function () {
    Route::get('', 'CatalogController@index')->name('catalog');
    Route::get("{url}", 'CatalogController@show')->where('url', '[A-Za-z0-9/-]+')->name('catalog.show');
});

// Feedback Form
Route::post('/feedback/store', 'FeedbackController@store')->name('feedback.store');

Route::get('{url?}', 'PageController@show')->where('url', '[A-Za-z0-9/-]+')->name('page.show');