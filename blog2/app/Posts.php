<?php

namespace App;



class Posts extends Model
{
    //this refers to the model which has no guarded inputs!!!
    protected $fillable = ['title', 'body','user_id'];

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

    public function addComment($body){
       /*Comment::create([
            'body' => $body,
            'posts_id'=> $this->id
        ]);*/

        $this->comments()->create(compact('body'));
    }

    public function user(){
        return $this->belongsTo(User::class); //allows for '$comment->user->name'
    }
}
