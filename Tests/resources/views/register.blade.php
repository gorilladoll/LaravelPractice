@extends('master')

@section('content')
  <form class="" action="/auth/login" method="post">
    {!! csrf_field() !!}
    <div class="">
      Name
      <input type="text" name="text" value="{{ old('name')}}">
    </div>

    <div class="">
      Email
      <input type="email" name="email" value="{{ old('email')}}">
    </div>

    <div class="">
      Password
      <input type="password" name="password" id="password">
    </div>

    <div class="">
      Confirm Password
      <input type="password" name="password_confirmation">
    </div>

    <div class="">
      <button type="submit">submit</button>
    </div>
  </form>
  @stop
