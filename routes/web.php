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

Route::middleware(['web'])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::resource('diet', 'Admin\DietController');
        Route::resource('dish', 'Admin\DishController');
        Route::resource('day', 'Admin\DayController');
        Route::resource('eating', 'Admin\EatingController');
        Route::resource('eating_type', 'Admin\EatingTypeController');
        Route::resource('category', 'Admin\CategoryController');

        Route::prefix('diet')->group(function () {
            Route::get( 'copy/{id}',   add_controller_ns('DietController@copy'))->name("diet.copy");
        });

        Route::prefix('dish')->group(function () {
            Route::get( 'copy/{id}',   add_controller_ns('DishController@copy'))->name("dish.copy");
        });
    });

});
