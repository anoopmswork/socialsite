<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::post('authenticate', 'HomeController@authenticate');
    Route::match(['get', 'post'], 'dashboard', 'DashboardController@viewDashboard');
    Route::get('logout', 'HomeController@logout');
    Route::get('listcars', 'DashboardController@listCars');
    Route::post('deletecar','DashboardController@deleteSpecificCar');
    Route::get('showcar/{id}','DashboardController@showCar');
    Route::post('addcar','DashboardController@addCar');
    Route::resource('variant', 'VariantController');
    Route::post('specificcars','DashboardController@getSpecificCompanyCars');
    Route::get('reviews','ReviewController@listReviews');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
