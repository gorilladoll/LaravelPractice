@extends('master')

@section('content')
  <form class="" action="/auth/login" method="post">
    {!! csrf_field() !!}
    <div class="">
      Email
      <input type="email" name="email" value="{{ old('email')}}">
    </div>

    <div class="">
      Password
      <input type="password" name="password" id="password">
    </div>

    <div class="">
      <input type="checkbox" name="remember"> Remember Me
    </div>

    <div class="">
      <button type="submit">submit</button>
    </div>
  </form>
  @stop
