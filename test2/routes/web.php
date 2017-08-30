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


/* 5장 뷰에 바인딩하기 */
// Route::get('/',function(){
//   $greeting = 'Hello';
//   return view('tests.index')->with('greeting',$greeting);
// });
//with 메소드를 이용한 바인딩

// Route::get('/',function(){
//   return view('tests.index')->with([
//     'greeting' => 'Good Moring',
//     'name' => 'appkr'
//   ]);
// });
//with 메소드를 이용하여 여러개의 데이터를 넘김

// Route::get('/',function(){
//   return view('tests.index',[
//     'greeting' => 'Ola',
//     'name' => 'Laravelians'
//   ]);
// });
//view()의 2번째 인자로 데이터를 넘김

// Route::get('/',function(){
//   $view = view('tests.index');
//   $view->greeting = "hello~ whats up";
//   $view->name = 'everyone';
//   return $view;
// });
/* 5장 뷰에 바인딩하기 끝 */

/* 6장 블레이드 */
// Route::get('/',function(){
//   $items = [
//     'apple',
//     'banana'
//   ];
//   return view('tests.index',compact('items'));
// });
/* 6장 블레이드 끝 */

/* 12장 컨트롤러 */
// Route::get('/indexcontroller','IndexController@index');
/* 12장 컨트롤러 끝 */

/* 13장 Restful */
// Route::resource('posts','PostsController');
/* 13장 Restful 끝 */

/* 14장 이름이 있는 Route */
// Route::get('posts',[
//   'as' => 'posts.index',
//   'user'=>'PostsController@index'
// ]);

// Route::get('posts',[
//   'as' => 'posts.index',
//   function(){
//     return view('posts.index');
//   }
// ]);
//closer로 사용시 이름 부여 방법
// Route::resource('posts','PostsController');
/* 14장 이름이 있는 Route 끝*/

/* 15장 중첩 리소스 */
// Route::resource('posts.comments','PostCommentController');
/* 15장 중첩 리소스 끝*/

/* 16장 사용자 인증 기본 */
// Route::get('auth',function(){
//   $credentials = [
//     'email' => 'john@example.com',
//     'password' => 'password'
//   ];
//
//   if(!Auth::attempt($credentials)){
//     return 'Incorrent Username and Password Combination';
//   }
//   return redirect('protected');
// });

// Route::get('auth/logout',function(){
//   Auth::logout();
//   return 'See you Again';
// });

// Route::get('protected',function(){
//   if(!Auth::check()){
//     return 'Illegal access~ You Can not Access';
//   }
//   return 'Welcome back, '.Auth::user()->name;
// });
// 미들웨어 사용하지 않음

// Route::get('protected',[
//   'middleware' => 'auth',
//   function(){
//     return 'Welcome back, '.Auth::user()->name;
//   }
// ]);
//미들웨어 사용

// Route::get('auth/login',function(){
//   return 'You havee reached to the login page';
// });
/* 16장 사용자 인증 기본 끝 */

/* 17장 라라벨 내장 사용자 인증 */
// Route::get('/',function(){
//   return 'See you Soon';
// });
//
// Route::get('home',[
//   'moddleware'=>'auth',
//   function(){
//     return 'welcome back'.Auth::user()->name;
//   }
// ]);
//
// Route::get('auth/login','Auth\LoginController@getLogin');
// Route::post('auth/login','Auth\LoginController@postLogin');
// Route::get('auth/logout','Auth\LoginController@getLogout');
//
//
// Route::get('auth/login','Auth\RegisterController@getRegister');
// Route::post('auth/login','Auth\RegisterController@getRegister');

//문법이 바뀌어 전체적으로 문제가 많이 있음

/* 17장 라라벨 내장 사용자 인증 끝 */

/* 20장 Eager 로딩 */
// Route::get('posts',function(){
//   $posts = App\Post::get();
//   return view('posts.index',compact('posts'));
// });

// Route::get('posts',function(){
//   $posts = App\Post::with('user')->get();
//   return view('posts.index',compact('posts'));
// });

// Route::get('posts',function(){
//   $posts = App\Post::get();
//   $posts->load('user');
//   return view('posts.index',compact('posts'));
// });
/* 20장 Eager 로딩 끝 */

/* 추가-페이징 */
// Route::get('posts',function(){
//   $posts = App\Post::with('user')->paginate(10);
//   return view('posts.index',compact('posts'));
// });
/* 추가-페이징 */

/* 21장 메세지 */
// Route::get('mail',function(){
//   $to = "gorilladoll@naver.com";
//   $subject = "Studing sending Email in Laravel";
//   $data = [
//     'title' => 'Hi There',
//     'body' => 'This is the Body of an Email Message',
//     'user' => App\User::find(1)
//   ];
//
//   return Mail::send('emails.welcome',$data,function($message) use($to,$subject){
//     $message->to($to)->subject($subject);
//   });
// });
/* 21장 메세지(실패) 끝 */

/* 22장 이벤트 */
// Route::get('auth',function(){
//   $credentials = [
//     'email' => 'john@example.com',
//     'password' => 'password'
//   ];
//   if(! Auth::attempt($credentials)){
//     return "Inocorrect username and password combination";
//   }
//   Event::fire('user.login',[Auth::user()]);
//   var_dump('Event fired and continue to next line....');
//   return;
// });
//
// Event::listen('user.login',function($user){
//   var_dump('"user.log" event catched and passd data is:');
//   var_dump($user->toArray());
//
//   $user->last_login = (new DateTime)->format('Y-m-d H:i:s');
//   return $user->save();
// });

/* 22장 이벤트 끝 */

/* 23장 입력값 유효 검사 */

// Route::post('posts',function(\Illuminate\Http\Request $request){
//   $rule = [
//     'title' => ['required'],              // 'title' => required
//     'body' => ['required','min:10']       // 'body' => 'required|min:10'
//   ];
//
//   $validator = Validator::make($request->all(),$rule);
//
//   if($validator->fails()){
//     return redirect('posts/create')->withErrors($validator)->withInput();
//   }
//   return 'Valid & Proceed to next job ~';
// });
//
// Route::get('posts/create',function(){
//   return view('posts.create');
// });

/* 23장 입력값 유효 검사 끝 */

/* 24장 예외처리 */

// Route::get('/',function(){
//   throw new Exception('Some bad thing happened');
// });

// Route::get('/',function(){
//   return App\Post::findOrFail(100);
// });
/* 24장 예외처리 끝 */


/* 25장 컴포저 */
// Route::get('/', function() {
//     $text =<<<EOT
// **Note** To make lists look nice, you can wrap items with hanging indents:
//
//     -   Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
//         Aliquam hendrerit mi posuere lectus. Vestibulum enim wisi,
//         viverra nec, fringilla in, laoreet vitae, risus.
//     -   Donec sit amet nisl. Aliquam semper ipsum sit amet velit.
//         Suspendisse id sem consectetuer libero luctus adipiscing.
// EOT;
//
//     return app(ParsedownExtra::class)->text($text);
// });
/* 25장 컴포저 끝 */

/* 26장 Document 모델 */
// Route::get('docs/{file?}',function($file = null){
//   $text = (new App\Document)->get($file);
//   return app(ParsedownExtra::class)->text($text);
// });
/* 26장 Document 모델 끝 */

/* 27장 Document Controller */
// Route::get('docs/{file?}',[
//   'as' => 'documents.show',
//   'uses' => 'DocumentsController@show'
// ]);
//에러가 있음


/* 27장 Document Controller 끝*/
