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

// a rota 'http://localhost:8000/tasks' acessa o método do controlador, especificado após o '@'
Route::group(['middleware' => 'auth:api'], function (){
    Route::get('tasks','TasksController@index')->name('indexTasks');
    Route::post('tasks','TasksController@store')->name('storeTasks');
    Route::get('tasks/{id}','TasksController@show')->name('showTasks');
    Route::post('tasks/{id}','TasksController@update')->name('updateTasks');
    Route::get('tasks/destroy/{id}','TasksController@destroy')->name('destroyTasks');
});