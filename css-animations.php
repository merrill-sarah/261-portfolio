<!DOCTYPE html>
<html>
    <head>
        <title>CSS Animations</title>
        
        <style>
            @-webkit-keyframes shake {
             0%, 100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
              }

              10%, 30%, 50%, 70%, 90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
              }

              20%, 40%, 60%, 80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
              }
            }

            @keyframes shake {
              0%, 100% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
              }

              10%, 30%, 50%, 70%, 90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
              }

              20%, 40%, 60%, 80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
              }
            }
            
            @-webkit-keyframes slideInLeft {
            0% {
              -webkit-transform: translate3d(-100%, 0, 0);
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
            }

            100% {
              -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
            }
          }
            
            @keyframes slideInLeft {
            0% {
              -webkit-transform: translate3d(-100%, 0, 0);
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
            }

            100% {
              -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
            }
            }

                      
            h1 {
                color:pink;
                position: relative;
                width:300px;
                -webkit-animation: myfirst 1s;
                animation: myfirst 1s;
            }
        </style>
        
        <script>
            function slideLeft(){
                document.getElementById("shake").style.webkitAnimationName = "slideInLeft";
            }
            function shake(){
                document.getElementById("shake").style.webkitAnimationName = "shake";
                document.getElementById("shake").onmousedown = function (){
                    document.getElementById("shake").style.webkitAnimationName = "";
                };
            }
        </script>
        
    </head>
    <body onload="slideLeft()">
        <h1 id='shake' onclick='shake()'> Click to Shake!</h1>
    </body>
</html>