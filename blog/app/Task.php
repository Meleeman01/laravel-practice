<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //below returns all incomplete tasks;

    public function scopeincomplete($query) //Task::incomplete(); //the scope in scopeincomplete actually means something, it's short hand for laravel so you can put your query in a variable aptly named query.
/*it's a wrapper around a query according to laracasts*/
    {
    	return $query->where('completed',0);
    }
}
