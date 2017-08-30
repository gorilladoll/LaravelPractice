@extends('logins.index')

@section('content')
  {{-- 우선 기능구현 부터 --}}
  <div class="container">
    <div id="input_div">
      @if ($logined)
        <form class="input_form" action="/sns/create" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="username">{{$logined}}</label>
            <textarea class="form-control" name="content" rows="4" cols="50"></textarea>
          </div>
          <div class="form-group">
            <label for="upload_file">파일업로드</label>
            <input class="form-control" type="file" name="image">
          </div>
          <div class="form-group">
            <button type="submit" name="submit">작성완료</button>
          </div>
        </form>
      @endif
    </div>

    <div class="container">
      <div class="col-xs-6">
        <table class = "table">
          <tbody>
            @for ($i=0,$count = count($written); $i < $count ; $i++)
            <tr>
              <td>&lt;{{$users[$i][0]}}&gt;</td>
            </tr>

            @if ($written[$i]->image)
              <tr>
                <td>
                  <img src="{{url('/storage/'.$written[$i]->image)}}" alt="">
                </td>
              </tr>
            @endif

            @if ($written[$i]->content)
              <tr>
                <td>
                  <p>{{$written[$i]->content}}</p>
                </td>
              </tr>
            @endif

            <tr>
              <td><br/><br/></td>
            </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
