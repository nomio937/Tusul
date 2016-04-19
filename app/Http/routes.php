<?php
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@header');
Route::get('login','HomeController@login');
Route::get('daslsignup','LoginController@daslsignup');
Route::post('login', 
			array('as' => 'sign-post',
			'uses' => 'LoginController@getpost'
		));
Route::group(['middleware' => ['web']], function () {
    //
});
Route::get('register','LoginController@register');
Route::get('logout','LoginController@logout');
Route::post('register', 
			array('as' => 'register-post',
			'uses' => 'LoginController@respost'
		));
Route::post('respos', 
			array('as' => 'regis-post',
			'uses' => 'LoginController@respost'
		));
Route::post('categories',function(){
	if (Request::ajax()) {
		# code...
		# code...
		$g = Request::all();
		$array = array(
			'name' =>$g['dfirstname'],
			'date'=> 'эрэгтэй',
            'alban_tushaal_id'=> '1',
            'amjilt'=>$g['damjilt'],
            'tsol' => $g['d_tsol'],
            'lastname' =>$g['dlastname'],
			'huis'=> 'эрэгтэй',
			'address' => $g['daddress'],
			'phone'=> $g['dphone'],
			'email' => $g['demail'],
			'loginname' => $g['loginname'],
			'password' => $g['dpassword']);
		$t=DB::table('dasgaljuulagch')->insert($array);
	}
});
Route::get('Inputimpormation','HomeController@impormation');
Route::post('impsave','ImpomationController@postres');
Route::post('save','ImpomationController@isave');
Route::get('getjsoncode',function(){
	$res  = DB::table('impormation')-> join('impormation_type','impormation_type.id','=','impormation.Impormation_type_id')-> select('impormation.date','impormation.title','impormation.subject','impormation_type.tname')->orderBy('impormation.date','Decs')->get();
return  Response::json($res);
});
Route::get('impview','HomeController@getview');
Route::get('/getreg', function(){
	if (Request::ajax()) {
		$n  =Request::all();
		$s = DB::table('impormation_type')->where('tname','=',$n)->get();
		return Response::json($s);
		# code...
	}
});
Route::post('typeregis','LoginController@typeregis');
Route::get('tamir_regis','LoginController@tamir_regis');
Route::post('tamir_regiser',function(){
	if (Request::ajax()) {
		# code...
		# code...
		$g = Request::all();
		$array = array(
      		'name' => $g['loginname'],
			'password' => $g['password']);
		$t=DB::table('users')->insert($array);
	}
});