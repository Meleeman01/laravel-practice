<?php

namespace App;


class Comment extends Model
{
    public function posts(){
    	return $this->belongsTo(Posts::class);
    }
}
//function must have same name as model!!!