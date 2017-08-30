@extends('logins.index')

@section('header')
  <h1>Login</h1>
@endsection

@if(!isset($session))
  @section('content')
    <form class="login_form" action="/login_confirm" method="post">
      <fieldset>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <label class="col-sm-2 control-label">ID</label>
          <div class="col-sm-10">
            <input type="text" name="email" class="form-control" placeholder="example@example.com">
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">PW</label>
          <div class="col-sm-10">
            <input type="password" name="password" class="form-control" placeholder="password">
          </div>
        </div>
      </fieldset>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="/signup"><button type="button" name="button" class="btn btn-default">
            회원가입
          </button></a>
          <button type="submit" name="button" class="btn btn-primary">
            로그인
          </button>
        </div>
      </div>
    </form>
  @endsection
@else
  @section('content')
    <h1>환영합니다 {{$session}}님</h1>
    <div class="col-sm-offset-2 col-sm10">
      <a href="/logout"><button type="button" name="logout" class="btn btn-primary">로그아웃</button></a>
      <a href="/board"><button type="button" name="board" class="btn btn-default">게시판</button></a>
      <a href="/sns"><button type="button" name="sns" class="btn btn-default">SNS</button></a>
    </div>
  @endsection
@endif
