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

Route::get('/', function () {
    return view('app');
});

Route::get('/submit', ['as' => 'submit-code', function ()
{
	return 1;
}]);

Route::get('/login/google', [
	'as' => 'google-login',
	'middleware' => App\Http\Middleware\RedirectIfAuthenticated::class,
	'uses' => 'AuthController@getGoogleLogin'
]);

Route::get('/logout', ['uses' => 'AuthController@logout', 'as' => 'logout']);