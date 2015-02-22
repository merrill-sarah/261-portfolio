<!DOCTYPE html>
<!--
This is my sandbox code.
-->
<html>
    <head>
        <title>JSON</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    
    </head>
    <body>
        <h2>JSON</h2>
        <div id="example"></div>
        
        <script>
            var input= '{"shopping":[' +
                '{"item":"milk","quantity":"2" },' +
                '{"item":"eggs","quantity":"12" },' +
                '{"item":"chocolate","quantity":"50" }]}';
            
            var list = JSON.parse(input);
            
            document.getElementById("example").innerHTML = 
                    "I need " + list.shopping[0].quantity + " " + list.shopping[0].item + ".<br>" +
                    "I need " + list.shopping[1].quantity + " " + list.shopping[1].item + ".<br>" +
                    "I need " + list.shopping[2].quantity + " " + list.shopping[2].item + ".";
        </script>
    </body>
</html>