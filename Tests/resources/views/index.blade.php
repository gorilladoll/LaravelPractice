@extends('layouts.master')

@section('style')
  <style media="screen">
    body {background: red;}
  </style>
@stop

@section('content')
  Your content here !!!
  @if(!$posts)
    <div class="text-center">
      {!! $posts->render() !!}
    </div>
  @endif
@stop

@section('section')
  <script type="text/javascript">
    alert('Hello Blade~ ^^/');
  </script>
@stop
