<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getId(){
        return $this->id;
    }

    /**
     * User relationship to books
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    public function userbooks(){
        return $this->hasMany('App\UserBook');
    }
}
