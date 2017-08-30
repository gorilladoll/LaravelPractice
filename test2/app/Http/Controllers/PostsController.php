<?php
//13장 RESTful에서 만듦
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //13장 RESTful에서 만듦
        return '['.__METHOD__.']'.'respond the index page';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //13장 RESTful에서 만듦
      return '['.__METHOD__.']'.'respond a create form';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //13장 RESTful에서 만듦
      return '['.__METHOD__.']'.'balidate the form dats from the create form and create a new instance';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //13장 RESTful에서 만듦
      return '['.__METHOD__.']'.'respond an instance havind id of '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //13장 RESTful에서 만듦
      return '['.__METHOD__.']'.'respond an edit form for id of '.$id;
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
      //13장 RESTful에서 만듦
      return '['.__METHOD__.']'.'validate the form data from the edit form and update the resource having id of '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //13장 RESTful에서 만듦
        return '['.__METHOD__.']'.'delete reousrce '.$id;
    }
}
