{{-- 20장 --}}
@extends('posts.master')
@section('content')
  <h1>List Of Posts</h1>
  <hr/>
  <ul>
    @forelse($posts as $post)
      <li>
        {{ $post->title }}
        <small>
          by {{ $post->user->name }}
        </small>
      </li>
    @empty
      <p>There is no Article</p>
    @endforelse
  </ul>


  {{-- 추가 페이징 --}}

  @if(!$posts)
    <div class="text-center">
      {{!! $posts->render() !!}}
    </div>
  @endif
@stop


{{-- @if ($posts)
  <ul>
    @foreach($posts as $post)
      <li>{{$post->title}}</li>
      <li><small>{{$post->user->name}}</small></li>
    @endforeach
  </ul>
 @else
   <p>There is no Article</p>
@endif --}}

{{-- @forelse($posts as $post)
  <li>
    {{ $post->title }}
    <small>
      by {{ $post->user->name }}
    </small>
  </li>
@empty
  <p>There is no Article</p>
@endforelse
</ul> --}}

{{-- 에러 확인을 위해 사용한 코드 --}}
{{-- @extends('master')부터 에러를 유발한다 --}}
{{-- 어떤 폴더든 @extneds()의 경우 폴더명 까지 적어줘야 에러가 나지 않는다 --}}
