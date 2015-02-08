<!DOCTYPE html>
<html>
    <head>
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
            
            function showCat1(){
                //change the inner HTML of an element
                document.getElementById("name").innerHTML = cat1.name;
                document.getElementById("age").innerHTML = 'Age: ' + cat1.age;
                document.getElementById("breed").innerHTML = 'Breed: ' + cat1.breed;
                document.getElementById("sex").innerHTML = 'Sex: ' + cat1.sex;
                document.getElementById("weight").innerHTML = 'Weight: ' + cat1.weight;
                
                //change the style of an element
                document.getElementById("name").style.color = "red";
                document.getElementById("info").style.display = "initial";
            }
            function showCat2(){
                //change the inner HTML of an element
                document.getElementById("name").innerHTML = cat2.name;
                document.getElementById("age").innerHTML = 'Age: ' + cat2.age;
                document.getElementById("breed").innerHTML = 'Breed: ' + cat2.breed;
                document.getElementById("sex").innerHTML = 'Sex: ' + cat2.sex;
                document.getElementById("weight").innerHTML = 'Weight: ' + cat2.weight;
                
                //change the style of an element
                document.getElementById("name").style.color = "blue";
                document.getElementById("info").style.display = "initial";
            }
            function showCat3(){
                //change the inner HTML of an element
                document.getElementById("name").innerHTML = cat3.name;
                document.getElementById("age").innerHTML = 'Age: ' + cat3.age;
                document.getElementById("breed").innerHTML = 'Breed: ' + cat3.breed;
                document.getElementById("sex").innerHTML = 'Sex: ' + cat3.sex;
                document.getElementById("weight").innerHTML = 'Weight: ' + cat3.weight;
                
                //change the style of an element
                document.getElementById("name").style.color = "green";
                document.getElementById("info").style.display = "initial";
            }
        </script>
    </head>
    <body>
        <ul>
            <li style="display:inline;"><button type="button" onclick="showCat1()">Cat 1</button></li>
            <li style="display:inline;"><button type="button" onclick="showCat2()">Cat 2</button></li>
            <li style="display:inline;"><button type="button" onclick="showCat3()">Cat 3</button></li>
        </ul>
        <div id="content">
            <h1 id="name"></h1>
            <ul id="info" style="display:none;">
                <li id="age"></li>
                <li id="breed"></li>
                <li id="sex"></li>
                <li id="weight"></li>
            </ul>
        </div>

</body>
</html>
