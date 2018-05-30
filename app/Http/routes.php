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

Route::get('/', array('uses' => 'PagesController@index', 'as' => 'index'));

//Guest Routes
Route::group(array('before' => 'guest'), function(){
   Route::get('register', array('uses' => 'UsersController@getRegister', 'as' => 'getRegister'));
   Route::get('login', array('uses' => 'UsersController@getLogin', 'as' => 'getLogin'));
    Route::group(array('before' => 'csrf'), function(){
       Route::post('register', array('uses' => 'UsersController@postRegister', 'as' => 'postRegister'));
       Route::post('login', array('uses' => 'UsersController@postLogin', 'as' => 'postLogin'));
    });
});

//User Place Routes
Route::group(['middleware' => ['auth']], function(){
    //Get Uploads Page
    Route::get('myPlaces', array('uses' => 'UsersController@getMyPlaces', 'as' => 'getMyPlaces'));
    Route::get('place/delete/{id}', array('uses' => 'UsersController@deletePlace', 'as' => 'deletePlace'));
    Route::group(array('before' => 'csrf'), function(){
        Route::post('myPlaces', array('uses' => 'UsersController@postPlaces', 'as' => 'postPlaces'));
        Route::get('postComment/{id}', array('uses' => 'PlacesController@postComment', 'as' => 'postComment'));
    });
});

//Guest Place Routes
Route::group(array('before' => 'guest'), function(){
    Route::get('place/{id}', array('uses' => 'PlacesController@place', 'as' => 'place'));
});

//Guest profile Routes
Route::group(array('before' => 'guest'), function(){
    Route::get('profile/{id}', array('uses' => 'PeopleController@profile', 'as' => 'profile'));
});

//Search and add friends
Route::group(['middleware' => ['auth']], function(){
    Route::get('search', array('uses' => 'PeopleController@getSearch', 'as' => 'search'));
    Route::get('sendRequest/{id}', array('uses' => 'PeopleController@sendRequest', 'as' => 'sendRequest'));
    Route::get('acceptRequest/{id}', array('uses' => 'PeopleController@acceptRequest', 'as' => 'acceptRequest'));
    Route::get('rejectRequest/{id}', array('uses' => 'PeopleController@rejectRequest', 'as' => 'rejectRequest'));
});

//User Logout
Route::group(array('before' => 'auth'), function () {
    Route::get('logout', array('uses' => 'UsersController@getLogout', 'as' => 'getLogout'));
});

//Log Viewer
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Other pages
Route::get('locations', array('uses' => 'PagesController@locations', 'as' => 'locations'));
Route::get('resources', array('uses' => 'PagesController@resources', 'as' => 'resources'));