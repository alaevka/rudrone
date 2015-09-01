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

Route::get('/', 'HomeController@showIndexPage');

//app routing

Route::get('signin/github', 'Auth\AuthController@signInGithub');
Route::get('signin/github/callback', 'Auth\AuthController@signInGithubCallback');

Route::get('signin/vk', 'Auth\AuthController@signInVk');
Route::get('signin/vk/callback', 'Auth\AuthController@signInVkCallback');

Route::get('signin', ['as' => 'site.auth.signin.get', 'uses' => 'Auth\AuthController@showSignInForm']);
Route::post('signin', ['as' => 'site.auth.signin.post', 'uses' => 'Auth\AuthController@signIn']);
    
Route::get('signup', ['as' => 'site.auth.signup.get', 'uses' => 'Auth\AuthController@showSignUpForm']);
Route::post('signup', ['as' => 'site.auth.signup.post', 'uses' => 'Auth\AuthController@signUp']);

Route::group(array('middleware' => 'auth'), function() {
    Route::get('signout', 'Auth\AuthController@signOut');

    Route::get('staticmap', ['as' => 'site.map.staticmap.get', 'uses' => 'Map\MapController@showStaticMap']);
    
    // Route::get('profile', ['as' => 'site.profile.index.get', 'uses' => 'ProfileController@showIndex']);
    // Route::post('profile', ['as' => 'site.profile.index.post', 'uses' => 'ProfileController@showIndex']);
});



//api routing
Route::group(array('prefix' => 'api/v1'), function(){

    Route::resource('users', 'Api\UserController', array('only' => array('index', 'store')));
    Route::post('device', function(){
    	echo 'hello dima!';
    });

    Route::get('test', function () {
    	echo '1'; die();
    });
    
});