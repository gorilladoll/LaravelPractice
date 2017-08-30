@extends('logins.index')

@section('header')
  <h1>Writed</h1>
@endsection

@section('content')
  <table class = "table">
    <tbody class = "table-striped">
      <tr>
        <td><b>제목</b></td>
        <td class="col-sm-offset-2 col-sm-10" colspan = '4'>
          {{$board->subject}}
        </td>
      </tr>

      <tr>
        <td colspan = '4' rowspan = '5'>내용</td>
        <td class="col-sm-offset-2 col-sm-10">
          <pre>{{$board->content}}</pre>
        </td>
      </tr>
    </tbody>
  </table>

  <table class = "table">
    <tbody class = "table table-striped">
      @for($i = 0; $i < count($repley); $i++)
        <tr>
          <td>댓글</td>
          <td class="col-sm-offset-2 col-sm-10">
            <pre>{{$repley[$i]->content}}</pre>
          </td>
        </tr>
      @endfor
    </tbody>
  </table>
  {{ $repley->links() }}

  <form class="inline-form" action="/board_repley" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <input type="hidden" name="board" value="{{$board->id}}">
    </div>
    <div class="form-group">
      <label for="repley">댓글입력</label>
      <input type="text" class="form-control" name="repley" placeholder="댓글을 입력하세요">
    </div>

    <div class="form-group">
      <button type="submit" name="repley_submit" class="btn btn-success btm-sm">작성완료</button>
    </div>
  </form>

  <a href="/">
    <button type="button" class = "btn btn-primary btn-sm">
      메인으로
    </button>
  </a>
  <a href="/board">
    <button type="button" class = "btn btn-default btn-sm">
      게시판으로
    </button>
  </a>
@endsection
