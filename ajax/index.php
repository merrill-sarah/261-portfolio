<!DOCTYPE html>
<html>
    <head>
        <title>Ajax</title>
        
        <style>
            #content {
                width: 400px;
            }
            ul {
                list-style-type: none;
                margin:5px;
            }
            li {
                display: inline-block;
                margin:3px;
                padding:2px;
                background-color:mediumvioletred;
                border-radius: 3px;
                width:75px;
            }
            a {
                display:block;
                width:75px;
                text-align: center;
                text-decoration:none;
                color:white
            }
        </style>
        
    </head>
<body>
    <ul id="nav">
        <li><a href="twig">Twig</a></li>
        <li><a href="iris">Iris</a></li>
        <li><a href="amaterasu">Amaterasu</a></li>
    </ul>
    <div id="content"></div>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="general.js"></script>
</body>
</html>