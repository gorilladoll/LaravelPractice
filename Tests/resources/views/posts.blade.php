<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.js">
  </head>
  <body>
    @if($posts)
      <div class="text-center">
        {!! $posts->render() !!}
      </div>
    @endif
  </body>
</html>
