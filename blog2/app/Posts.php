<?php

namespace App;



class Posts extends model
{
    //this refers to the model which has no guarded inputs!!!
    protected $fillable = ['title', 'body'];
}
