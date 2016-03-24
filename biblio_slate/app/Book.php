<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'book';

    public function userbook(){
    	return $this->hasMany('App\UserBook');
    }

    public function loan(){
    	return $this->hasManyThrough('App\Loan', 'App\UserBook');
    }

}
