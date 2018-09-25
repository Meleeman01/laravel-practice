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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/', function () {
	$name = 'World';
	/*$tasks = [
		'go to the store',
		'finish my screencast',
		'clean the house'
	];*/

	//the above is statically inputted data
	//$tasks=DB::table('tasks')->latest()->get(); using query builder

	$tasks=Task::all();//using eloquent model

    return view('welcome',compact('name', 'tasks'));
});

// '{}' <-this is a wildcard
//dd($task);//die and dump. helper function laravel






Route::get('/about', function () {
    return view('about');
});