<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PostsController extends Controller
{
    //
    public function index(){
    	return view('layout');
    }
    public function show(){
    	return view('posts.show');
    }

    public function create(){
    	return view('posts.create');
    }


    public function store(){
    	//dd(request(['title','body']));

    	// Create a new post using request data

    	//$post = new \App\Posts; // `\App\Post` means begin at root 

    	//$post->title = request('title');

    	//$post->body = request('body');

    	// Save it to the database 

    	//$post->save();

    	$this->validate(request(),[

    		'title'=>'required|max:25',
    		'body'=>'required'

    	]);

    	\App\Posts::create(request(['title','body']));

    

    	// And then redirect to the homepage.

    	return redirect('/');
    }
}
