@extends('layouts.main')
@section('title')
  Page of Working List
@endsection
@section('content')
<!DOCTYPE html>
<html>
  <header>
    <title>Compact Excample</title>
    <Meta charset = 'UTF-8'>
  </header>
  <body>
    @foreach($tasks as $task)
    <div>work : {{ $task['name'] }}</div>
    <div>due_date : {{ $task['due_date'] }}</div>
    <br/>
    @endforeach

    <!--
    @for($i = 0; $i < count($tasks); $i++)
    <hr/>
    <div>work : {{ $tasks[$i]['name'] }}</div>
    <div>due_date : {{ $tasks[$i]['due_date'] }}</div>
    <br/>
    @endfor
    -->
  </body>
</html>
