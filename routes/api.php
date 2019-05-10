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


//List dictionary words
Route::get('dictionary','DictionaryController@index');
//List single word
Route::get('dictionary/{word}','DictionaryController@show');
//Create new word
Route::post('dictionary','DictionaryController@store');
//Update word
Route::put('dictionary','DictionaryController@store');
//Delete word
Route::delete('dictionary/{word}','DictionaryController@destroy');