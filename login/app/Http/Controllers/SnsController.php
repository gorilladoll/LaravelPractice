<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Snstype;

class SnsController extends Controller
{
    private $user;
    private $sns;

    public function __construct(){
      $this->user = new User();
      $this->sns = new Snstype();
    }
    public function index(Request $request){
      $friends = $this->user->inRandomOrder()->pluck('name');
      $written = $this->sns->orderBy('id','desc')->get();
      $users = [];
      $storage = [];
      $randUser = [];
      $count = 0;

      foreach ($friends as $friend) {
        $randUser = $friend;
      }

      for($i=0 , $count = count($written); $i < $count ; $i++){
        $users[$i] = $this->user->where('id',$written[$i]['user_id'])->pluck('name');
      }


      return view('boards.sns')->with([
        'logined' => $request->session()->get('login'),
        'users' => $users,
        'written' => $written,
        'randUser' => $randUser,
      ]);
    }

    public function create(Request $request){
      $user_id = $this->user->where('name',$request->session()->get('login'))->pluck('id');

      if($request->has('content') && $request->hasFile('image')){
        $time = Date('Y-m-d(H:i:s)');
        $content = $request->input('content');
        $image_name = $request->file('image')->getClientOriginalName();
        $image_type = $request->file('image')->extension();
        $file_name = $user_id[0].'_'.$time.'_'.$image_name;
        // $file_path = $request->file('image')->storeAs('public','file.jpg');
        // $file = $request->file('image')->getRealPath();

        if($image_type == "jpg" || $image_type == "jpeg" || $image_type == "png" || $image_type == "gif"){
            $request->file('image')->storeAs('public',$file_name);
        }

        Snstype::create([
          'user_id' => $user_id[0],
          'content' => $content,
          'image' => $file_name,
        ]);

        return redirect('/sns');
      }

      else if($request->has('content') && !$request->hasFile('image')){
        $content = $request->input('content');
        Snstype::create([
          'user_id' => $user_id[0],
          'content' => $content,
        ]);
        return redirect('/sns');
      }

      else if(!$request->has('content') && $request->hasFile('image')){
        $time = Date('Y-m-d(H:i:s)');
        $image_name = $request->file('image')->getClientOriginalName();
        $image_type = $request->file('image')->extension();
        $file_name = $user_id[0].'_'.$time.'_'.$image_name;

        if($image_type == "jpg" || $image_type == "jpeg" || $image_type == "png" || $image_type == "gif"){
            $request->file('image')->storeAs('public',$file_name);
        }

        Snstype::create([
          'user_id' => $user_id[0],
          'image' => $file_name,
        ]);

        return redirect('/sns');
      }

      else{
        return redirect('/sns');
      }
    }
}
