<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Board;
use App\User;
use App\Repley;

class BoardController extends Controller
{
    //
    private $board;
    //For Board Object
    private $user;
    //For User Object
    private $repley;
    //For Repley Object;
    public function __construct(){
      $this->board = new Board();
      $this->user = new User();
      $this->repley = new Repley();
      //Create Board & User Model;
    }
    public function mainForm(){
      // $datas = DB::table('boards')->paginate(3);
       $datas = $this->board->orderby('id','desc')->paginate(5);
      //Get Data from DB in board

      $user = [];
      // //Get User_id for UserName

      for($i = 0 ; $i < count($datas); $i++){
        $user[$i] = $this->user->where('id',$datas[$i]['user_id'])->pluck('name');
      }
      // //Get User Name Code

      return view('boards.main')->with([
        'datas' => $datas,      //Send board array
        'user'  => $user,       //send user array
      ]);
    }

    public function forWrite(){
      return view('boards.forwrite');
      //Route forwrite
    }

    public function create(Request $request){
      $subject = $request->input('subject');
      //get post subject
      $content = $request->input('content');
      //get post content
      $user = $this->user->where('name',$request->session()->get('login'))->pluck('id');
      //get name in user

      if(isset($subject) && isset($content)){
        Board::create([
          'subject' => $subject,
          'user_id' => $user[0],
          'content' => $content,
        ]);
        return redirect('/board');
        //if isset subject and content
        //create board and redirect board
      }
      return redirect('/board');
      //no have subject and content redirect board
    }

    public function writed(Request $request){
      $id = $request->path();
      //get path for display content
      $board_id = explode('/',$id);
      //for get board_id

      $board = $this->board->where('id',$board_id[1])->first();
      //get datas in board that use board_id

      $repley = $this->repley->where('board_id',$board_id[1])->orderby('id','desc')->paginate(3);
      //Get datas in Repley where board_id = board_id

      return view('boards.writed')->with([
        'board' => $board,
        'repley' => $repley
      ]);
    }

    public function repley(Request $request){
      $content = $request->input('repley');
      $user_id = $this->user->where('name',$request->session()->get('login'))->pluck('id');
      $board_id = $request->input('board');

      if(isset($content)){
        Repley::create([
        'user_id' => $user_id[0],
        'board_id' => $board_id,
        'content' => $content
        ]);
        return redirect('/board_writed/'.$board_id);
      }
      return redirect('/board_writed/'.$board_id);
    }
}
