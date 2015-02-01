<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Creating a JavaScript Object</title>
    </head>
    <body>        
        <p>Creating a JavaScript Object</p>
        
        <h1>Cat Object</h1>
        <p id="fullName"></p>
        <p id="breed"></p>
        <p id="age"></p>
        
        <script type="text/javascript">
            var cat = {
                firstName:"Twig",
                lastName:"Fitzgerald",
                age:2,
                breed:"Snowshoe",
                weight:"10 pounds",
                fullName: function(c) {
                    return this.firstName + " " + this.lastName;
                }
            };
            document.getElementById("fullName").innerHTML = "Name: " + cat.fullName();
            document.getElementById("breed").innerHTML = "Breed: " + cat.breed;
            document.getElementById("age").innerHTML = "Age: " + cat.age;
        </script>
    </body>
</html>
