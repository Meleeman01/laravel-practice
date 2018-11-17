<?php

namespace App;



class Posts extends Model
{
    //this refers to the model which has no guarded inputs!!!
    protected $fillable = ['title', 'body'];

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
}
