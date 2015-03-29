<!DOCTYPE html>
<html>
    <head>
        <title>CSS Transitions</title>
        
        <style>
            div {
                width:150px;
                height:150px;
                background-color:crimson;
                color:white;
                margin:2px;
            }
            
            #one {
                -webkit-transition: background-color 3s;
                transition: background-color 3s;
            }
            #one:hover {
                background-color:black;
            }
            
            #two {
                -webkit-transition: font-size 5s height 2s width 2s;
                transition: font-size 5s, height 2s, width 2s;
            }
            #two:hover {
                font-size: 30px;
                width:100px;
                height:100px;
            }
            
            #three {
                -webkit-transition: color 1s background-color 3s margin-left 2s margin-top 5s; 
                transition: color 1s, background-color 3s, margin-left 2s, margin-top 5s;
            }
            #three:hover {
                color:crimson;
                background-color:white;
                margin-left:100px;
                margin-top:40px;
            }
            #four {
                -webkit-transition: transform 3s height 1s width 1s font-size 1s;
                transition: transform 3s, height 1s, width 1s, font-size 1s;
                -webkit-transition-delay: 2s; /* Safari */
                transition-delay: 2s;
            }
        </style>
        <script>
            function four(){
                var box = document.getElementById("four");
                
                box.style.height = "25px";
                box.style.width = "25px";
                box.style.transform = "rotate(360deg)";
                box.innerHTML = "Wait... wait... wait...  Click again!";
                box.style.fontSize = "8px";
                box.style.color = "crimson";
                box.removeAttribute("onclick");
                box.setAttribute("onclick","reset()" );
            }
            function reset(){
                var box = document.getElementById("four");
                
                box.style.height = "";
                box.style.width = "";
                box.style.transform = "";
                box.innerHTML = "Click!";
                box.style.fontSize = "";
                box.style.color = "";
                box.removeAttribute("onclick");
                box.setAttribute("onclick", "four()" );
            }
        </script>
    </head>
    <body>
        <div id="one">Hover!</div>
        <div id="two">Hover</div>
        <div id="three">Hover!</div>
        <div id="four" onclick="four()">Click!</div>
        
    </body>
</html>
