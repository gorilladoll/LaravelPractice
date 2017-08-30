<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- { endfor; endwhile; endswitch; endforeach;} -->
    <link rel="stylesheet" href="/shopping/mvc_htdocs/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!--  bxslider를 사용하기 위해서 제이쿼리 라이브러리를 가져 옮 -->
    <script src="/shopping/mvc_htdocs/jquery/jquery.bxslider.min.js"></script>
    <script src="/shopping/mvc_htdocs/jquery/bxslider.js" charset="utf-8"></script>
    <!-- bxslider의 css 라이브러리 -->
    <link href="/shopping/mvc_htdocs/jquery/jquery.bxslider.css" rel="stylesheet" />
    <!--http://bxslider.com/ 참고-->
  </head>
  <body>
    <center>
<div id="header">
  <div id="htitle">
    <h1>ComputerShop</h1>
  </div>
  <div id="huser">
    @if()
      <a href="">
        메인으로
      </a>
      <a href="">
        계정
      </a>

      <a href="">
        로그인
      </a>
      <a href="">
        회원가입
      </a>

  </div>
</div>

<div id="nav">
  <ul class = "mainslide">
    <li class = "apple"><a href="">apple</a></li>
    <li class = "samsung"><a href="">samsung</a></li>
    <li class = "lg"><a href="">lg</a></li>
    <li class = "dell"><a href="">dell</a></li>
    <li class = "navmove"><a href="">게시판</a></li>
    <li class = "cart"><a href="">구매목록</a></li>
  </ul>
</div>
<div id="main">
  @yield('main')
</div>
</center>
  </body>
</html>
