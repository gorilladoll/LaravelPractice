@extends('logins.index')

@section('header')
  <h1>Board</h1>
@endsection

@section('content')
  <table class = "table">
    <tbody class = "table-striped">
      <tr>
        <th>글번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>작성시간</th>
      </tr>

      @if(isset($datas))
        @for($i = 0; $i < count($datas) ; $i++)
          <tr>
            <td>{{$datas[$i]['id']}}</td>
            <td><a href="/board_writed/{{$datas[$i]['id']}}">{{$datas[$i]['subject']}}</a></td>
            <td>{{$user[$i][0]}}</td>
            <td>{{$datas[$i]['updated_at']}}</td>
          </tr>
        @endfor
      @endif
    </tbody>
  </table>

  {{ $datas->links() }}

  <a href="/">
    <button type="button" class = "btn btn-primary btn-sm">
      메인으로
    </button>
  </a>
  <a href="/board_forWrite">
    <button type="button" class = "btn btn-default btn-sm">
      작성하기
    </button>
  </a>

@endsection
