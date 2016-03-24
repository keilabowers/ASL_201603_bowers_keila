<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $table = 'loan';

    public function bookLoan(){
    	return $this->belongsTo('App\Book');
    }

    // public function userBookLoan(){
    // 	return $this->belongsTo('\App\UserBook');
    // }
}
