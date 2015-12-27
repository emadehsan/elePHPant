<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::controllers ([
        'auth'      => 'Auth\AuthController',
        'password'  => 'Auth\PasswordController'
    ]);

    // Route::controller('')

    /**
    * For Logged in users only
    */
    Route::group(['middleware' => ['auth']], function() {

        Route::get('/home', function() {
            // $user_id = 1;
            $user_id = Auth::user()->id;
            return redirect()->route('home', ['user_id' => $user_id]);
        });

        // for user to view & edit code
        // named route for logged in user's home
        Route::get('/{user_id}/ide', ['as' => 'home', 'uses' => 'CodeController@getIDE']);

        // for user to save & execute code
        Route::post('/{user_id}/ide', 'CodeController@saveExecCode');

        Route::get('/codes', function() {
            // list of codes
            $codes = App\Code::all();
            return view('codes', ['codes' => $codes]);
        });


        // for admin to view code
        Route::get('/{user_id}/code', 'CodeController@getCode');
    });

});
