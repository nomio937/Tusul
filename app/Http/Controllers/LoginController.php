<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\LoginModel;
use App\AdminLogin;
use App\DasgaljuulagchModel;
class LoginController extends Controller
{
    //
    public  function  getpost(Request $request){
        $v=Validator::make($request->all(),[
           'username' =>'required|min:5|max:32',
           'password' => 'required|min:3|max:32', ]);
        
        $name = Input::get('username');
        $pass  = Input::get('password');
        $k  = LoginModel::where('name','=',$name)->get();
        $n  = LoginModel::where('name','=',$name)->first();
        $p =  LoginModel::where('password','=',$pass)->first();
if (!empty($n) &&  !empty($p)) {
           return  view('content/loginbody');
        }
        else 
        {
          $admin  = Input::get('username');
          $admin_pass  = Input::get('password');
        $admin_name  = AdminLogin::where('name','=',$admin)->first();
        $admin_p =  AdminLogin::where('password','=',$admin_pass)->first();
        if (!empty($admin_name) && !empty($admin_pass)) {
          # code...
          return  view('admin/admin');
          }
           else{
          $das_name = Input::get('username');
          $das_login = Input::get('password');
          $dname= DasgaljuulagchModel::where('loginname','=',$das_name);
          $dlogin=DasgaljuulagchModel::where('password','=',$das_login); 
          if (!empty($dname) && !empty($dlogin)) {
            # code...
            return view('content/dasbody');
          }
        }
        }
       
        
     }
    public  function register(){
    	return  view('login/register');
       }
       public  function respost(Request $request){
       	$field= Validator::make($request->all(),[
       		'name' =>'required|min:5|max:32',
       		'email' =>'required|min:5|max:32',
       		'pass' => 'required|min:5|max:32',
       		'confirm_pass' =>'required|min:5|max:32']);
           $massiv= $request->all();
       	$array = array(
       		'name' =>$massiv['name'] ,
       		'email' => $massiv['email'],
       		'password' => $massiv['pass'],
       		'confirm_pass' => $massiv['confirm_pass'], 
          ); 
       	$use_t = DB::table('users')->insert($array);
        
       	if ($use_t>0) {
       		# code...
       		return  redirect('login');
       	}
       }
       public  function logout(){
        return redirect('/');
       }
  public function  daslsignup(){
    return  view('login/daslsignup');
  }
  public function   tamir_regis(){
    return  view('login/tamirchin');
  }

  }
