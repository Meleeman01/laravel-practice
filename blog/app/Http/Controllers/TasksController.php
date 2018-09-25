<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    //index method here...
    public function index()
    {
    	$tasks=Task::all();//using eloquent model
		return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) // same as Task::find(wildcard);
    {
		//$task=DB::table('tasks')->find($id);
		
		
		return view('tasks.show',compact('task'));
    }
}
