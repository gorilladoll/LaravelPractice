{{-- 5장 내용 시작 --}}
{{-- <p>
  {{ $greeting }} {{ $name or '' }} Welcome Back~
</p> --}}
{{-- 5장의 내용 끝--}}

{{-- 6장 내용 시작 --}}
{{-- <ul>
  @foreach($items as $item)
    <li>{{ $item }}</li>
  @endforeach
</ul>

@if($itemCount = count($items))
  <p>There are {{ $itemCount }} items!</p>
@else
  <p>There is no item!</p>
@endif

@forelse($items as $item)
  <p>There item is {{ $item }}</p>
@empty
  <p>There is no item!</p>
@endforelse --}}
{{-- 6장 내용 끝--}}

{{-- 7장 내용--}}
{{-- @extends('tests.master')
@section('style')
  <style media="screen">
    body {background:red;}
  </style>
@endsection

@section('content')
  Your content here!
@endsection

@section('script')
  <script type="text/javascript">
    alert('Hello Blade!');
  </script>
@endsection --}}
{{-- 7장 내용 끝--}}
