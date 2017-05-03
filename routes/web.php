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



    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'welcome'
    ]);


    Route::get('/packages', [
        'uses' => 'PackageController@index',
        'as' => 'packages'
    ]);
    Route::get('/packages/create', [
        'uses' => 'PackageController@create',
        'as' => 'create_packages'
    ]);
    Route::post('/packages/create', [
        'uses' => 'PackageController@store',
        'as' => 'add_package'
    ]);

    Route::get('/cities/create', [
        'uses' => 'CityController@create',
        'as' => 'create_city'
    ]);
    Route::post('/cities/create', [
        'uses' => 'CityController@store',
        'as' => 'add_city'
    ]);

    Route::post('/comment/create', [
        'uses' => 'CommentController@store',
        'as' => 'add_comment'
    ]);
    Route::post('/contact_us', [
        'uses' => 'PublicUserController@store',
        'as' => 'public_message'
    ]);
    Route::post('/message', [
        'uses' => 'SendMessageController@store',
        'as' => 'user_message'
    ]);
//    Route::get('/test',function(){
//        return view('test');
//    });

    Route::post('/image', [
        'uses' => 'ImageController@store',
        'as' => 'upload'
    ]);




    Route::get('/packages/{package}', 'PackageController@show');


    Route::get('/admin_register', function(){
        return view('register');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', [
    'uses' => 'Auth\LoginController@logout',
    'as' => 'logout'
]);