<?php

namespace App;


class Comment extends Model
{
    public function posts(){
        return $this->belongsTo(Posts::class);
    }
    public function user(){
        return $this->belongsTo(User::class); //allows for '$comment->user->name'
    }
}
//function must have same name as model!!!