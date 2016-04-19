<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Impomation;
use DB;

class ImpomationController extends Controller
{
    //
 
    public  function postres(Request $request)
    {
        $massiv= $request->all();
         if(Input::hasFile('file')){
        $file= Input::file('file');
        $file->move("upload/",$file->getClientoriginalName());
       $path = $file->getClientoriginalName();
       echo $path;
        $array = array(
          'title' =>$massiv['title'] ,
          'subject' => $massiv['subject'],
          'comment' => '1',
          'image' => $path,
          'Impormation_type_id' => $massiv['number'], 
          ); 
        $use_t = DB::table('impormation')->insert($array);
        
        if ($use_t>0) {
          # code...
          return  redirect('impview');
        }
     }
       
       }
}
