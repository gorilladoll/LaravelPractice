<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drag',function(){
  return view('drag');
});

Route::get('/drag2',function(){
  return view('drag2');
});

Route::get('/','Auth\LoginController@show');
//Route Login Controller Show Login Page;

Route::get('/signup','Auth\LoginController@showSignup');
//Route Login Controller Show Signup Page

Route::post('/signup_confirm','Auth\LoginController@signupConfirm');
//Route Login Controller Show Signup Confirm And Logined

Route::post('/login_confirm','Auth\LoginController@loginConfirm');
// Route::post('/login_confirm','LoginsController@storeLogin');
//Route Login Controller Confirm Login And Logined Or Unlogin

Route::get('/logout','Auth\LoginController@Logout');
//Route Login Controller Logout

Route::get('/board','BoardController@mainForm');
//Route Board Controller Show main Form

Route::get('/board_forWrite','BoardController@forWrite');
//Route Board Controller Return forWrite.balde.php

Route::post('/board_create','BoardController@create');
//Route Board Contoller Create Memo

Route::get('/board_writed/{id}','BoardController@writed');
//Route Board Controller Show writed

Route::post('/board_repley','BoardController@repley');
//Route Board Controller repley

Route::get('/drd',function(){
  return view('img.drd');
});

Route::get('/sns','SnsController@index');

Route::post('/sns/create','SnsController@create');

Route::get('storage/{filename}',function($filename){
  $path = storage_path('public',$filename);
  if(!File::exists($path)){
    abort(404);
  }
  $file = File::get($path);
  $type = File::mineType($path);

  $response = Response::make($file,200);
  $response->header('Content-type',$type);

  return $response;
});
