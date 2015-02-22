<!DOCTYPE html>
<html>
    <head>
        <title>Local Storage</title>  
        <script>
            //store item
            localStorage.setItem('item', 'cat');
            //retrieve item
            var listItem = localStorage.getItem('item');
            
            document.getElementById('output').innerHTML = listItem;
        </script>
    </head>
    <body>
        <div id="output"></div>
    </body>
</html>