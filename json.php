<!DOCTYPE html>
<html>
    <head>
        <title>JSON sandbox code</title>
        <script> 
        function createArray() {
            var cats = [];

            var cat = new Object;
            cat.name = "Twig";
            cat.breed = "Snowshoe";
            cats.push(cat);

            var cat2 = new Object;
            cat2.name = "Iris";
            cat2.breed = "Persian";
            cats.push(cat2);

            var cat3 = new Object;
            cat3.name = "Amaterasu";
            cat3.breed = "Calico";
            cats.push(cat3);

            localStorage.setItem('cats',JSON.stringify(cats));
        }
        function displayArray() {
            createArray();
            var table = "<tr><th>Name</th><th>Value</th></tr>\n";
            var i=0;
            cats = JSON.parse(localStorage.cats);
            for (i=0; i<=cats.length-1; i++) {
                table += "<tr><td>"+cats[i].name+"</td>\n<td>"+cats[i].breed+"</td></tr>\n";
            }
            if (table === "<tr><th>Name</th><th>Value</th></tr>\n") {
                table += "<tr><td><i>empty</i></td>\n<td><i>empty</i></td></tr>\n";
            }
            document.getElementById('table').innerHTML = table;
        }
        </script>
    </head>
    <body onload="displayArray()">
        <table id="table">
            
        </table>
    </body>
</html>
