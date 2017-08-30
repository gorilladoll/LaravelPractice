<?php
use Illuminate\Http\Response;
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

Route::get('hello',function(){
  return 'Hello!';
});

Route::get('Hello/myProject',function(){
  return 'Hello myProject';
});

Route::get('hello/{name?}',function($na=""){
  return 'hello~'.$na;
});//->where(['name'=>'정규표현식']);

Route::get('test/php/{name?}',function($name='test'){
  $res = new Response('안녕하세요'.$name,200);
  $res->header('Content-Type','text/plain');
  return $res;
});

Route::get('test/php1/{name?}',function($name='ttt'){
  return response('Hello~!2'.$name,200)
  ->header("Content-Type",'text/plain');
});

Route::get('test/php2/{name?}',function($name='ttt'){
  return response('Hello~!3'.$name,200)
  ->header("Content-Type",'text/plain')
  ->header('Cache-Controll','max-age='. 60*60 .',must-revalidate');
});

Route::get('test/json',function(){
  $data = ['name' => 'JJG' , 'gender' => 'male'];
  //express json in php
  return response()->json($data);
});

Route::get('test/heredoc',function(){
  $content = <<<HTML
  <!DOCTYPE html>
  <html>
    <header>
      <title>Heredoc Excample</title>
      <Meta charset = 'UTF-8'>
    </header>
    <body>
      <h1>Laravel Example</h1>
      <h3>Do not sleep</h3>
    </body>
  </html>
HTML;
    return $content;
});

Route::get('test/heredoc1',function(){
  return View::make('test.heredoc');
});

Route::get('test/compact',function(){
  $task = ['name' => 'ForWork','due_date' => '2017-02-08 15:22:32'];
  return view('test.view',compact('task'));
});

Route::get('test/with',function(){
  $task = ['name' => 'ForWork2','due_date' => '2017-02-08 15:30:32'];
  return view('test.view')->with('task',$task);

  //return view('test.view')->with('tast',$task)
  //                        ->with('user',$user)
  //                        ->with('testinfo',$testinfo);
});

Route::get('test/alert',function(){
  $task = ['name' => 'Laravel Example',
           'due_date' => '2017-02-09 14:35:55',
           'comment' => '<script>alert("Welcome");</script>'];
           //cross site scripting을 방지하기 위해 blade 사용이 권장된다.
           //blade 사용을 하지 않는 경우 : htmlentities()
           // < -- &lt > -- &gt
           //세너타이징(Sanitising) : 원래의 의미에서 바꿈(원래의 의미 -> 소독)
  return view('test.alert')->with('task',$task);
});

Route::get('cal/{num}',function($num){
  return view('cal')->with('num',$num);
});

Route::get('test/list',function(){
  $tasks = [
    ['name' => 'today_work1 : study' , 'due_date' => '2017-02-09 15:43:43'],
    ['name' => 'today_work2 : study' , 'due_date' => '2017-02-09 15:43:44'],
    ['name' => 'today_work3 : study' , 'due_date' => '2017-02-09 15:43:45'],
  ];

  return view('test.list')->with('tasks',$tasks);
});

Route::get('test/list1',function(){
  $tasks = [
    ['name' => 'today_work1 : php' , 'due_date' => '2017-02-10 15:43:43'],
    ['name' => 'today_work2 : study_blade_example' , 'due_date' => '2017-02-10 15:43:44'],
    ['name' => 'today_work3 : eat_and_sleep' , 'due_date' => '2017-02-10 15:43:45'],
  ];
  return view('test/list1')->with('tasks',$tasks);
});

// usage inside a laravel route
Route::get('image', function()
{
    $img = Image::make('foo.jpg')->resize(300, 200);

    return $img->response('jpg');
});

Route::resource('resttest','RestTestController');
Route::resource ('ormtest','OrmTestController');
