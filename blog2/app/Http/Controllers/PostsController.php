<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>'index',
                                   'except'=>'show']);
    }

    public function index(){
    	$posts= Posts::orderBy('created_at','desc')->get();
       $archives = Posts::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
         ->groupBy('year', 'month')
         ->orderByRaw('min(create_at) desc')
         ->get()->toArray();
        

    	return view('layout',compact('posts', 'archives'));
    }
    public function show($id){
        $archives = Posts::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
         ->groupBy('year', 'month')
         ->orderByRaw('min(create_at) desc')
         ->get()->toArray();
    	$post = Posts::find($id);

    	return view('posts.show', compact('post', 'archives'));
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
    		'body'=>'required',
            

    	]);
//--------------------------------------------------------------laracasts ep 18
    	/*Posts::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()

    ]);*/

        auth()->user()->publish(
            new Posts(request(['title','body']))
        );

    	// And then redirect to the homepage.

    	return redirect('/');
    }

    
}
