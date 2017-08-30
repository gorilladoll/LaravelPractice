<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 Essential</title>
  </head>
  <body>
    @yield('style')
    @yield('content')
    @yield('script')
    @include('tests.footer')
    {{-- 7장 블레이드 --}}
  </body>
</html>
