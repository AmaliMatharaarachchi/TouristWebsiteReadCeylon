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



Route::group(['middleware' => ['web']], function () {

    Route::get('/contact', [
        'uses' => 'PageController@getContactPage',
        'as' => 'contact'
    ]);

    Route::get('/', [
        'uses' => 'PageController@getWelcomePage',
        'as' => 'welcome'
    ]);


    Route::get('/packages', [
        'uses' => 'PackageController@index',
        'as' => 'packages'
    ]);
    Route::get('/packages/create',[
        'uses' => 'PackageController@create',
        'as' => 'create_packages'
    ]);
    Route::post('/packages/create', [
        'uses' => 'PackageController@store',
        'as' => 'add_package'
    ]);

    Route::get('/cities/create',[
        'uses' => 'CityController@create',
        'as' => 'create_city'
    ]);
    Route::post('/cities/create', [
        'uses' => 'CityController@store',
        'as' => 'add_city'
    ]);

    Route::get('/packages/{package}','PackageController@show' );



});

Auth::routes();

Route::get('/home', 'HomeController@index');
