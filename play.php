﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Собирай!</title>
</head>

<body
    style="background-color: rgb(139, 201, 182)">

<body>

    
<?php
     if(array_key_exists("level" , $_REQUEST)) 
     { 

        if($_REQUEST["level"]=="cube.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери кубик</div>' ;
        if($_REQUEST["level"]=="apple.jpg") echo '<div style="font-size:4.25em;color:#FFFFFF">Собери яблоко</div>'; 
        if($_REQUEST["level"]=="kot.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери котиков</div>'; 
        if($_REQUEST["level"]=="ball.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери мяч</div>';
        if($_REQUEST["level"]=="map.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери карту</div>';
        if($_REQUEST["level"]=="sword.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери меч</div>';
        if($_REQUEST["level"]=="flowers.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери цветок в горшке</div>';
        if($_REQUEST["level"]=="car.jpg") echo '<div style="font-size:4.25em;color:#FFFFFF">Собери машину</div>';
        if($_REQUEST["level"]=="tower.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери башню</div>';
        if($_REQUEST["level"]=="igolka.jpg") echo  '<div style="font-size:4.25em;color:#FFFFFF">Собери иголку с ниткой</div>';

        $imgplay = $_REQUEST["level"];
     
       // echo"Собери ".$_REQUEST["level"];
         echo"<br>";
       //  if($_REQUEST["level"]=="level") echo $imgplaytext ;
          ?>
         <style>
     
    

         body { margin: 0; padding: 0; border: 0; min-width: 320px; color: #777; }
         html, button, input, select, textarea, .pure-g [class *= "pure-u"] { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 1.02em; }
         p, td { line-height: 1.5; }
         ul { padding: 0 0 0 20px; }
 
         th { background: #eee; white-space: nowrap; }
         th, td { padding: 10px; text-align: left; vertical-align: top; font-size: .9em; font-weight: normal; border-right: 1px solid #fff; }
         td:first-child { white-space: nowrap; color: #008000; width: 1%; font-style: italic; }
 
         h1, h2, h3 { color: #4b4b4b; font-family: "Source Sans Pro", sans-serif; font-weight: 300; margin: 0 0 1.2em; }
         h1 { font-size: 4.5em; color: #1f8dd6; margin: 0 0 .4em; }
         h2 { font-size: 2em; color: #636363; }
         h3 { font-size: 1.8em; color: #4b4b4b; margin: 1.8em 0 .8em }
         h4 { font: bold 1em sans-serif; color: #636363; margin: 4em 0 1em; }
         a { color: #4e99c7; text-decoration: none; }
         a:hover { text-decoration: underline; }
         p, pre { margin: 0 0 1.2em; }
         ::selection { color: #fff; background: #328efd; }
         ::-moz-selection { color: #fff; background: #328efd; }
 
         @media (max-width:480px) {
             h1 { font-size: 3em; }
             h2 { font-size: 1.8em; }
             h3 { font-size: 1.5em; }
             td:first-child { white-space: normal; }
         }


         @media screen and (max-width:321px){
          body{width:100px}
          }


 
         .inline-code { padding: 1px 5px; background: #eee; border-radius: 2px; }
         pre { padding: 15px 10px; font-size: .9em; color: #555; background: #edf3f8; }
         pre i { color: #aaa; } /* comments */
         pre b { font-weight: normal; color: #cf4b25; } /* strings */
         pre em { color: #0c59e9; } /* numeric */
 
         /* Pure CSS */
         .pure-button { margin: 5px 0; text-decoration: none !important; }
         .button-lg { margin: 5px 0; padding: .65em 1.6em; font-size: 105%; }
 
         /* required snapPuzzle styles */
         .snappuzzle-wrap { position: relative; display: block; }
         .snappuzzle-pile { position: relative; }
         .snappuzzle-piece { cursor: move; }
         .snappuzzle-slot { position: absolute; background: #fff; opacity: .8; }
         .snappuzzle-slot-hover { background: #eee; }

         .snappuzzle-piece {
            border: 1px #00ff00f0 solid;
            filter: drop-shadow(2px 4px 6px black);
         }

         .snappuzzle-piece:hover {
            border: 1px green solid;
         }
     </style>
 </head>
 <body>
     <div id="puzzle-containment" style="border-top: 1px solid #eee;border-bottom:1px solid #eee;background:#fafafa;margin:30px 0;padding:10px;text-align:center">
         <div class="pure-g" style="max-width:1280px;margin:auto">
             <div class="pure-u-1 pure-u-md-1-2"><div style="margin:10px">


             
                 <img id="source_image" class="pure-img" src=<?=$imgplay?> style="position: absolute; top: 0px; left: 0px; display: block;">
             
             
                </div></div>
             <div class="pure-u-1 pure-u-md-1-2">
                 <div id="pile" style="margin:10px">
                     <div id="puzzle_solved" style="display:none;text-align:center;position:relative;top:25%">
                         <h2 style="margin:0 0 20px; font-size:4.25em">Вы победили!</h2>
                         <a style="font-size:4.25em" class="pure-button button-lg restart-puzzle" data-grid="3" >Начать заново</a>
                         <br><br>
                         <a href="#" style="font-size:4.25em" class="restart-puzzle" data-grid="5">5x5</a>
                         &nbsp; <a href="#" style="font-size:4.25em" class="restart-puzzle" data-grid="7">7x7</a>
                         &nbsp; <a href="#" style="font-size:4.25em" class="restart-puzzle" data-grid="10">10x10</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
     <script src="jquery.snap-puzzle.js"></script>
     <script>
         // jQuery UI Touch Punch 0.2.3 - must load after jQuery UI
         // enables touch support for jQuery UI
         !function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
 
         function start_puzzle(x){
             $('#puzzle_solved').hide();
             $('#source_image').snapPuzzle({
                 rows: x, columns: x,
                 height: 500,
                 pile: '#pile',
                 containment: '#puzzle-containment',
                 onComplete: function(){
                     $('#source_image').fadeOut(150).fadeIn();
                     $('#puzzle_solved').show();
                 }
             });
         }
 
         $(function(){
             $('#pile').height($('#source_image').height());
             start_puzzle(3);
 
             $('.restart-puzzle').click(function(){
                 $('#source_image').snapPuzzle('destroy');
                 start_puzzle($(this).data('grid'));
             });
 
             $(window).resize(function(){
                 $('#pile').height($('#source_image').height());
                 $('#source_image').snapPuzzle('refresh');
             });
         });
     </script> 
    <?php
    }
     else 
      echo"<br>Error. ne naideno.</br>";
?>
    <form action="http://localhost//jQuery-snapPuzzle-master/levels.php "> <input type="submit"  value="Назад" style="width:150px; height:100px; font-size: 50px" ></form> 







</body>
</html>
