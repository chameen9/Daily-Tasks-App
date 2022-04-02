<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks',function(){
    $data=App\Models\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/savetask','App\http\controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\http\controllers\TaskController@updatetaskascompleted');

Route::get('/markasnotcompleted/{id}','App\http\controllers\TaskController@updatetaskasnotcompleted');

Route::get('/deletetask/{id}','App\http\controllers\TaskController@deletetask');

Route::get('/updatetask/{id}','App\http\controllers\TaskController@updatetaskview');

Route::post('/updatetasktext','App\http\controllers\TaskController@updatetasktext');