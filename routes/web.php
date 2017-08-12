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


/////////home/////////////
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'welcome'
    ]);

    Route::get('/home', 'HomeController@index');

    /////////packages///////////////////////

    Route::get('/packages', [
        'uses' => 'PackageController@index',
        'as' => 'packages'
    ]);

    Route::post('/packages/create', [
        'uses' => 'PackageController@store',
        'as' => 'add_package'
    ]);

    Route::post('/packages/update', [
        'uses' => 'PackageController@update',
        'as' => 'package_update'
    ]);

///////////cities//////////////////
    Route::get('/cities', [
        'uses' => 'cityController@index',
        'as' => 'cities'
    ]);

    Route::post('/cities/create', [
        'uses' => 'CityController@store',
        'as' => 'add_city'
    ]);
    Route::post('/cities/update', [
        'uses' => 'CityController@update',
        'as' => 'city_update'
    ]);

    /////////review//////////////////

    Route::get('/reviews', [
        'uses' => 'ReviewController@index',
        'as' => 'reviews'
    ]);
    Route::post('/reviews/update', [
        'uses' => 'ReviewController@update',
        'as' => 'change_review'
    ]);
    Route::post('/review', [
        'uses' => 'ReviewController@store',
        'as' => 'user_review'
    ]);

///////////message/////////////////////////////

    Route::post('/message-to-all', [
        'uses' => 'UserController@message',
        'as' => 'admin_message'
    ]);

    Route::post('/message', [
        'uses' => 'SendMessageController@store',
        'as' => 'user_message'
    ]);

    Route::post('/contact-us', [
        'uses' => 'PublicUserController@store',
        'as' => 'public_message'
    ]);

/////////////comment//////////////////////////////////

    Route::post('/comment/create', [
        'uses' => 'CommentController@store',
        'as' => 'add_comment'
    ]);

    Route::post('/delete-comment', [
        'uses' => 'CommentController@destroy',
        'as' => 'delete_comment'
    ]);

////////////image////////////////////////////////

    Route::post('/image', [
        'uses' => 'ImageController@store',
        'as' => 'upload'
    ]);
//////////////customize tours///////////////////////////////////
    Route::post('/customize', [
        'uses' => 'TourController@store',
        'as' => 'customize'
    ]);

    /////////////show update, city package//////////////////////////////////////////////

    Route::get('/packages/{package}', 'PackageController@show');
    Route::get('/cities/{city}', 'CityController@show');
    Route::get('/cities/update/{city}', 'CityController@showUpdate');
    Route::get('/packages/update/{package}', 'PackageController@showUpdate');

///////////////////////////////////////////////////////////////////////////////////////
    Route::get('/admin-register', 'UserController@index');

    Route::post('/admin-registering', [
        'uses' => 'UserController@registerAdmin',
        'as' => 'admin_register'
    ]);
    Route::get('/logout', [
        'uses' => 'Auth\LoginController@logout',
        'as' => 'logout'
    ]);
//////////////not implemented///////////////////////////////
    Route::get('/view-message', [
        'uses' => 'SendMessageController@index',
        'as' => 'messages'
    ]);
    Route::get('/book-tour', [
        'uses' => 'BookingController@index',
        'as' => 'book'
    ]);

});

//Route::get('refresh-csrf', function () {
//    return csrf_token();
//});

Auth::routes();





