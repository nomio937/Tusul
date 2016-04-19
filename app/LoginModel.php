<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    //
        //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'users';
       protected $fillable = ['name','email', 'password'];
}
