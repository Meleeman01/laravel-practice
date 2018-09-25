<?php
use App\Task;
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

Route::get('/tasks',function (){
	//$tasks= DB::table('tasks')->latest()->get();
	$tasks=Task::all();//using eloquent model
	return view('tasks.index', compact('tasks'));

});



// '{}' <-this is a wildcard
Route::get('/tasks/{task}', function ($id) {
	
	//$task=DB::table('tasks')->find($id);
	$task=Task::find($id);
	//dd($task);//die and dump. helper function laravel

	return view('tasks.show',compact('task'));
});

Route::get('/about', function () {
    return view('about');
});