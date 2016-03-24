<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{
    public $table = 'userbook';

    public function user(){
        return $this->belongsTo('\App\User');
    } 

    public function book(){
    	return $this->belongsTo('\App\Book');
    }


}
