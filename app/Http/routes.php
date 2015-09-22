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

Route::get('signin/facebook', 'Auth\AuthController@signInFacebook');
Route::get('signin/facebook/callback', 'Auth\AuthController@signInFacebookCallback');

Route::get('signin', ['as' => 'site.auth.signin.get', 'uses' => 'Auth\AuthController@showSignInForm']);
Route::post('signin', ['as' => 'site.auth.signin.post', 'uses' => 'Auth\AuthController@signIn']);
    
Route::get('signup', ['as' => 'site.auth.signup.get', 'uses' => 'Auth\AuthController@showSignUpForm']);
Route::post('signup', ['as' => 'site.auth.signup.post', 'uses' => 'Auth\AuthController@signUp']);


Route::get('wizard', ['as' => 'site.wizard.get', 'uses' => 'Wizard\WizardController@showWizard']);
Route::get('community', ['as' => 'site.community.get', 'uses' => 'Community\CommunityController@showIndexPage']);

Route::group(array('middleware' => 'auth'), function() {
    Route::get('signout', 'Auth\AuthController@signOut');

    Route::get('map', ['as' => 'site.map.get', 'uses' => 'Map\MapController@showMap']);

    
    
    // Route::get('profile', ['as' => 'site.profile.index.get', 'uses' => 'ProfileController@showIndex']);
    // Route::post('profile', ['as' => 'site.profile.index.post', 'uses' => 'ProfileController@showIndex']);
});

/*
    api routing
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->resource('users', 'App\Http\Controllers\Api\V1\UserController', ['only' => ['index', 'store']]);
    $api->post('signin', 'App\Http\Controllers\Api\V1\UserController@signin');
});


$api->version('v1', ['middleware' => 'api.auth'], function ($api) {
    $api->get('user', function () {
        $user = app('Dingo\Api\Auth\Auth')->user();
        return $user;
    });
    $api->get('vtoken', 'App\Http\Controllers\Api\V1\UserController@validateToken');
    $api->resource('users', 'App\Http\Controllers\Api\V1\UserController', ['only' => ['destroy']]);
});