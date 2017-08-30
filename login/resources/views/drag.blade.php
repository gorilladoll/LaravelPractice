<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ggg</title>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
      .draggable {
          margin-left: 50px;
          border: 1px solid black;
          width: 500px;
          height: 600px;
          padding: 5px;
          float: left;
      }

      .content{
          border: 1px solid black;
          width: 150px;
          height: 600px;
          float: left;
      }
      .booth{
          margin-left: 10px;
          margin-top: 10px;
          border: 1px solid black;
          width: 98px;
          height: 98px;
      }

      .boothContent{
          border: 1px solid black;
          margin-left: 10px;
          margin-top: 10px;
          width: 98px;
          height: 98px;
      }


  </style>
  <script>
  $(function() {
      var boothObjArr = Array();

      $( ".booth" ).draggable({
          grid: [10, 10],   //부스 간격간 움직이는 거리
          snap: true,       //부스간 달라붙는 것
          stop:function(){
              function boothObj(){/*부스 클래스*/
                  this.top = 0;     //위 아래 초기화
                  this.left = 0;    //좌 우 초기화
                  this.booth;       //부스의 위치값 저장

                  this.getTop = function(){
                      return this.top;
                  }
                  this.getLeft = function(){
                      return this.left;
                  }
                  this.setTop = function(argTop){
                      this.top = argTop;      //상하 좌표 설정
                  }
                  this.setLeft = function(argLeft){
                      this.left = argLeft;    //좌우 좌표 설정
                  }

                  this.getBooth = function(){
                      return this.booth;
                  }
                  this.setBooth = function(argBooth){
                      this.booth = argBooth;   //부스 위치 설정
                  }
              }

              var boothLeft     = Number($(this).offset().left);          //부스의 횡 좌표
              var boothTop      = Number($(this).offset().top);           //부스의 높이 좌표
              var boardLeft     = Number($('.draggable').offset().left);  //작업장의 횡 좌표
              var boardTop      = Number($('.draggable').offset().top);   //작업장의 높이 좌표
              var boardWidth    = Number($('.draggable').width());        //작업장의 넓이
              var boothWidth    = Number($('.booth').width());            //부스의 넓이
              var boardHeight   = Number($('.draggable').height());       //작업장의 높이
              var boothHeight   = Number($('.booth').height());           //부스의 높이


              /*작업영역에 완벽하게 들어가지 않았을 경우 원래자리로 초기화*/
              if(boothLeft <= boardLeft ||
                 boothLeft >= boardLeft + boardWidth  - boothWidth ||     //부스 왼쪽 좌표가 작업장의 크기를 조금이라도 벗어나면 안됨
                 boothTop  <= boardTop  ||
                 boothTop  >= boardTop  + boardHeight - boothHeight){     //부스 상하 좌표가 작업장의 크기를 조금이라도 벗어나면 안됨

                 $(this).css({                                            //자리 초기화
                    "top":"0px",
                    "left":"0px"
                 });
                 return;
              }
              //====================

              /*작업장에 올라와있는 부스 요소의 id속성 get 및 부스간 충돌 판정*/
              if($('.boothContent').length){
                  for(var i = 0, length = boothObjArr.length; i < length; i++){   //
                      if((boothLeft+boothWidth) > boothObjArr[i].getLeft() &&
                         boothLeft < (boothObjArr[i].getLeft() + boothObjArr[i].getBooth().width()) &&
                         (boothTop+boothHeight) > boothObjArr[i].getTop() &&
                         boothTop < (boothObjArr[i].getTop() + boothObjArr[i].getBooth().height())){
                         $(this).css({
                            "top":"0px",
                            "left":"0px"
                         });
                         return;
                      }
                  }

                  var id = $('.boothContent').last().attr('id');
                  var idArr = id.split('_');
                  var idValue = Number(idArr[1])+1;
              }else{
                  var idValue = 1;
              }
              //====================

              var booth = "<div class='boothContent' id=content_" + idValue + ">BOOTH_"+idValue+"</div>";
              /*부스객체 추가, 부스도형 초기화 및 작업장에 부스 추가*/
              $(".draggable").append(booth);
              var boothObj = new boothObj();
              boothObj.setBooth($('#content_'+idValue));
              //alert($('#content_'+idValue).offset().top);
              boothObj.setTop(boothTop);
              boothObj.setLeft(boothLeft);
              //alert(boothObj.getTop());
              //alert(boothObj.getLeft());

              boothObjArr.push(boothObj);

              $('#content_'+idValue).css({
                "position":"absolute",
                "top": boothTop-10,
                "left": boothLeft-10
              });

              $(this).css({
                "top":"0px",
                "left":"0px"
              });
              //====================


              /*작업장에 추가된 부스요소의 draggable속성 추가 및 옵션설정*/
              $('.boothContent').draggable({
                  grid: [10,10],
                  snap: true,
                  stop:function(){
                      var thisLeft     = Number($(this).offset().left);
                      var thisTop      = Number($(this).offset().top);
                      var thisWidth    = Number($(this).width());
                      var thisHeight   = Number($(this).height());

                      var id = $(this).attr('id');

                      /*부스간 충돌방지*/
                      for(var i = 0, length = boothObjArr.length; i < length; i++){
                          if(id == boothObjArr[i].getBooth().attr('id')){
                             continue;
                          }
                          if((thisLeft+thisWidth) > boothObjArr[i].getLeft() &&
                             thisLeft < ( boothObjArr[i].getLeft() + boothObjArr[i].getBooth().width()) &&
                             (thisTop+thisHeight) > boothObjArr[i].getTop() &&
                             thisTop < (boothObjArr[i].getTop() + boothObjArr[i].getBooth().height())){
                               for(var i = 0, length = boothObjArr.length; i < length ; i++){

                                  if(id == boothObjArr[i].getBooth().attr('id')){
                                      $(this).css({
                                         "top":boothObjArr[i].getTop() -10,
                                         "left":boothObjArr[i].getLeft() -10
                                      });
                                      return;
                                   }
                               }
                          }
                      }
                       //=========================

                      /*작업장 안의 부스요소가 작업장을 벗어나는 것을 방지*/
                      if(thisLeft <= boardLeft ||
                         thisLeft >= Number(boardLeft + boardWidth - thisWidth) ||
                         thisTop  <= boardTop  ||
                         thisTop  >= boardTop + boardHeight - thisHeight + 10){

                         for(var i = 0, length = boothObjArr.length; i < length ; i++){

                             if(id == boothObjArr[i].getBooth().attr('id')){
                                 $(this).css({
                                     "position":"absolute",
                                     "top":boothObjArr[i].getTop() -10,
                                     "left":boothObjArr[i].getLeft() -10
                                 });
                                 return;
                             }

                         }
                      }else{    /*작업장을 벗어나지 않고 이동했을 경우 객체에 좌표초기화*/
                          for(var i = 0, length = boothObjArr.length; i < length ; i++){
                             if(id == boothObjArr[i].getBooth().attr('id')){
                                boothObjArr[i].setTop(thisTop);
                                boothObjArr[i].setLeft(thisLeft);
                             }
                         }
                      }
                  }
              });
              //====================
          }
      });
  });
  </script>
</head>
<body>

<div class="content">

    <div class="booth" id="draggable">BOOTH </div>
    <div class="booth" id="draggable">BOOTH </div>
    <div class="booth" id="draggable">BOOTH </div>

</div>

<div class="draggable ui-widget-content">
</div>


</body>
</html>
