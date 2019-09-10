<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('posts')->group(function(){
        
        // * Getters

        // List all
        Route::get('/', 'PostController@index')->name('index_post');
        
        // List by id
        Route::get('/{id}', 'PostController@show')->name('single_post');

        // * Post

        // Register
        Route::post('/', 'PostController@store')->name('store_post');

        // * Put

        // Update by id
        Route::put('/{id}', 'PostController@update')->name('update_post');

        // Like
        Route::put('/likes/{id}', 'PostController@like')->name('like_post');

        // * Delete

        // Destroy by id
        Route::delete('/{id}', 'PostController@destroy')->name('destroy_post');

    });
});
