<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class OrmTestcontroller extends Controller
{
    public function getAll(){
      $tasks = Task::all();
      return response()->json($task,200,[],JSON_PRETTY_PRINT);
    }

    public function setInsert(){
      $task = new Task();
      $task->name = '예제할일';
      $task->project_id = 1;
      $task->description = 'insert Example';
      $ret = $task->save();

      return response()->json(['result'=>$ret,'task'=>$task],200,[],JSON_PRETTY_PRINT);
    }

    public function getSoftDeletedList(){
      $tasks = Task::onlyTrashed()->get();
      //$tasks = Task::withTrashed()->get();
      return response()->json(['result'=>$ret,'task'=>$task],200,[],JSON_PRETTY_PRINT);
    }

    public function getRestoreSoftDeleted($id){
      $ret = Task::withTrashed()->find($id)->restore();
      return $ret;
    }

    public function getHasManyThrough($id){
      $tasks=User::findOrFail($id)->tasks()->orderBy('created_at')->get();
      var_dump($tasks);
    }

    public function getWhere(){
      $tasks = Task::where('id','>',10)
              ->where('id','<',20)
              ->where('name','like','할일%')
              ->orderBy('name','desc')
              ->skip(5)
              ->take(3)
              ->get();
              //->first();
              //select * from tasks
              //where id > 10 and id < 20
              //and name like '할일%'
              //order by name desc
              //limit 3 offset 5
      return response()->json($tasks);
    }

    /* Print All Records From Task */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return self::getAll();
        //self::getWhere();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return self::setInsert();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getFind(){
       $task = Task::find($id);
       //$task = Task::findOrFail($id);
       //Print Error Page that if File Not founded
       return response()->json($task,200,[],JSON_PRETTY_PRINT);
    }
    /* Print One Table */
    public function show($id)
    {
        //
        return self::getFind($id);
        //return self::getRestoreSoftDeleted($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
