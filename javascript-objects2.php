<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creating a JavaScript Object</title>
    </head>
    <body>        
        <p>Creating a JavaScript Object</p>
        
        <h1>Cat Objects</h1>
        <div id="cat1"></div>
        <div id="cat2"></div>
        <div id="cat3"></div>
        
        <script type="text/javascript">
            function Cat(n,a,b,s,w) {
                this.name = n;
                this.age = a;
                this.breed = b;
                this.sex = s;
                this.weight = w;
            }
            var cat1 = new Cat("Twig",2,"Snowshoe","female",10);
            var cat2 = new Cat("Iris",8,"Persian","female",5);
            var cat3 = new Cat("Amaterasu",4,"Calico","female",8);
            
            document.getElementById("cat1").innerHTML = "The first cat's name is " + cat1.name + ".";
            document.getElementById("cat2").innerHTML = "The second cat is a " + cat2.sex + ".";
            document.getElementById("cat3").innerHTML = "The third cat's breed is " + cat3.breed + ".";
        </script>
    </body>
</html>