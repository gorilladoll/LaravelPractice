{{-- 17장 내용 --}}
@extends('master')
@section('content')
  <form action="/auth/login" method="post">
    {{!! csrf_field() !!}}
    <div>
      Email
      <input type="email" name="email" value="{{ old('email')}}">
    </div>

    <div>
      Password
      <input type="password" name="password" id="password">
    </div>

    <div>
      <input type="checkbox" name="remember">Remember Me
    </div>

    <div>
      <button type="submit">Login</button>
    </div>
  </form>
@stop
{{-- 17장 내용 끝 --}}
