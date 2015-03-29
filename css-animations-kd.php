<!DOCTYPE html>
<!--
Sandbox code from KD
-->
<html>
    <head>
        <title>CSS Animation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            div{
                background: purple;
                height: 500px;
                width: 500px;
                -webkit-animation: letsdoit 3s;
                animation: letsdoit 3s;
            }
            @-webkit-keyframes letsdoit{
                0% {background: purple;}
                25% {background: pink;}
                50% {background: blue;}
                75% {background: black;}
                100% {background: purple;}
            }
            @keyframes letsdoit{
                0% {background: purple;}
                25% {background: pink;}
                50% {background: blue;}
                75% {background: black;}
                100% {background: purple;}
            }
            h1{
                font-size: 16px;
                color: red;
                -webkit-animation: heartbeat 10s;
                animation: heartbeat 10s;
            }
            @-webkit-keyframes heartbeat{
                0% {font-size: 16px; color: red;}
                20% {font-size: 30px; color: pink;}
                25% {font-size: 16px; color: red;}
                45% {font-size: 30px; color: pink;}
                50% {font-size: 16px; color: red;}
                70% {font-size: 30px; color: pink;}
                75% {font-size: 16px; color: red;}
                95% {font-size: 30px; color: pink;}
                100% {font-size: 16px; color: red;}
            }
            @keyframes heartbeat{
                0% {font-size: 16px; color: red;}
                20% {font-size: 30px; color: pink;}
                25% {font-size: 16px; color: red;}
                45% {font-size: 30px; color: pink;}
                50% {font-size: 16px; color: red;}
                70% {font-size: 30px; color: pink;}
                75% {font-size: 16px; color: red;}
                95% {font-size: 30px; color: pink;}
                100% {font-size: 16px; color: red;}
            }
        </style>
    </head>
    <body>
        <div></div><br>
        <h1>Love</h1>
    </body>
</html>