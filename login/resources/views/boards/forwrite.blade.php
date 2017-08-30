@extends('logins.index')

@section('header')
  <h1>Write</h1>
@endsection

@section('content')
  <form class="form-horizontal" action="/board_create" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
    <label for="inputSubject" class="col-sm-2 control-label">subject</label>
    <div class="col-sm-10">
      <input type="input" class="form-control" name="subject" placeholder="subject">
    </div>
  </div>
  <div class="form-group">
    <label for="inputContent" class="col-sm-2 control-label">content</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="5" name="content" placeholder="content"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">
        Submit
      </button>
    </div>
  </div>
</form>
@endsection
