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

use App\Package;
use Illuminate\Support\Facades\DB;

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
        'uses' => 'PageController@getPackagesPage',
        'as' => 'packages'
    ]);
    Route::get('/packages/create',[
        'uses' => 'PageController@createPackage',
        'as' => 'create_packages'
    ]);
    Route::post('/packages/create', [
        'uses' => 'PackageController@AddPackage',
        'as' => 'add_package'
    ]);

    Route::get('/city/create',[
        'uses' => 'PageController@createCity',
        'as' => 'create_city'
    ]);
    Route::post('/city/create', [
        'uses' => 'CityController@AddCity',
        'as' => 'add_city'
    ]);

    Route::get('/packages/{package}','PackageController@show' );



});

Auth::routes();

Route::get('/home', 'HomeController@index');
