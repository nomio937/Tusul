<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Impomation;
use Illuminate\Pagination\LengthAwarePaginator;
class HomeController extends Controller
{
    //
   public function paging() {

  }
    public  function footer(){
    	return  view('foot/footer');
    }
      public  function head(){
    	return  view('app');
    }
      public  function header(){
         $res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname','impormation.image')->orderBy('impormation.date','Decs')->limit('4')->get();
        return  view('head/header')->with('resdata',$res);
    }
    public  function login(){
         $res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname','impormation.image')->orderBy('impormation.date','Decs')->get();
           $res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname','impormation.image')->orderBy('impormation.date','Decs')->paginate(3);
    	return  view('login/login')->with('rdata',$res);
    }
    public function impormation(){
         $res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname','impormation.image','impormation_type.id')->groupby('impormation_type.tname')->get();
        return  view('imp/impormation')->with('imviewdata',$res);
    }
    public function getview(){
        $res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname')->orderBy('impormation.date','Decs')->get();
            return  view('imp/impview')->with('data',$res);
    }
}
