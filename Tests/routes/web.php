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

// Route::get('/','IndexController@index');
// Route::get('posts',[
//   'as' => 'posts.index',
//   function(){
//     return view('posts.index');
//   }
// ]);
// Route::resource('posts','PostsController');
// Route::resource('posts.comments','PostCommentController');
// Route::get('auth',function(){
//   $credentials = [
//     'email' => 'john@example.com',
//     'password' => 'password'
//   ];
//   if(!Auth::attempt($credentials)){
//     return 'Incorrct username and password combination';
//   }
//   return redirect('protected');
// });
//
// Route::get('auth/logout',function(){
//   auth::logout();
//   return 'See you Again~';
// });
//
// Route::get('protected',[
//   'middleware' => 'auth',
//   function(){
//     return 'Welcome Back '.Auth::user()->name;
//   }
// ]);
// Route::get('posts',function(){
//   $posts = App\Post::with('users')->paginate(10);
//   return view('posts',compact('posts'));
// });

// Route::get('protected',function(){
//   if(!Auth::check()){
//     return 'Illgal access !!! Get out of here~';
//   }
//   return 'Welcome back '.Auth::user()->name;
// });


Route::get('/', function () {
  return view('welcome');
});

// Route::get('/master',function(){
//     return view('layouts/master');
// });

// Route::get('/',function(){
//   $greeting = 'Hellow';
//   return view('index')->with('greeting',$greeting);
// });

// Route::get('/',function(){
//   return view('index',[
//     'greeting' => 'Ola~',
//     'name' => 'Laravelians'
//   ]);
// });

// Route::get('/',function(){
//     return 'HelloWorld';
// });

// Route::get('/',function(){
//     return view('errors.503');
// });

// Auth::routes();
//
// Route::get('/home', 'HomeController@index');
//
// Route::get('mail',function(){
//   $to = 'gorilladoll@naver.com';
//   $subject = "Studying sending email in Laravel";
//   $data = [
//     'title' => 'hi there',
//     'body' => 'This is the body of an email message',
//     'user' => App\User::find(1)
//   ];
//   return Mail::send('emails.welcome',$data,function($message) use($to,$subject){
//     $message->to($to)->subject($subject);
//   });
// });
