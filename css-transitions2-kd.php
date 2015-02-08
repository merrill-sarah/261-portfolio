<!DOCTYPE html>
<!--
This is sandbox code I created
-->
<html>
    <head>
        <title>CSS Transitions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            div{
                background-color: purple;
                height: 300px;
                width: 100px;
            }
            
            div:hover{
                background-color: orange;
                height: 400px;
                width: 300px;
                transition: height 0.5s, length 1s, background-color 3s;}
             
                a {
                    color: red;
                    font-size: 20px;
                    text-decoration: none;
                }
                
                a:focus, a:hover {
                    color: green;
                    font-size: 40px;
                    transition: 2s font-size 2s linear, 1s color 3s ease;
                }
            
        </style>
            
    </head>
    <body>
        <div></div>
        <a href="csstransition1.html">This goes to another transition page</a>
    </body>
</html>