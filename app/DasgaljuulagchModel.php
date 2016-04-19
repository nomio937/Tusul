<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DasgaljuulagchModel extends Model
{
    //
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $table = 'dasgaljuulagch';
       protected $fillable = ['name','date', 'alban_tushaal_id','amjilt','tsol','lastname','huis','address','phone','email','loginname','password'];
}
