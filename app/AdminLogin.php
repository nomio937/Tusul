<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    //
           //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'admin';
       protected $fillable = ['name','email', 'password'];
}
