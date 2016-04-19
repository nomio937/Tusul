<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impomation extends Model
{
    //
             //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'impormation';
       protected $fillable = ['title','subject', 'comment','image','Impormation_type_id'];
}
