<!DOCTYPE html>
<html>
    <head>
        <title>Shopping List</title>
        <link href="stylesheet.css" type="text/css" rel="stylesheet" />
        
        <script>
            function testFunction(){
                document.getElementById("header").css("background-color", "pink");
            }
            
            function changeColor(color){
                document.getElementByClass("themecolor").css("background-color", color);
            }        
        </script>
    </head>
    <body>
        <header class="themecolor" id="header">
            <a href="index.php" id="home">Home</a>
            <h1>List Name</h1>
        </header>
        <main>
            <table>
                <tr>
                    <td><img src="images/imp1-small.png" id="imp1" alt="important marker"></td>
                    <td>Item 1</td>
                    <td>Qty.</td>
                    <td><input type="checkbox" name="check" value="item1"></td>
                </tr>
                <tr>
                    <td><img src="images/imp1-small.png" id="imp1" alt="important marker"></td>
                    <td>Item 2</td>
                    <td>Qty.</td>
                    <td><input type="checkbox" name="check" value="item2"></td>
                </tr>
                <tr>
                    <td><img src="images/imp1-small.png" id="imp1" alt="important marker"></td>
                    <td>Item 3</td>
                    <td>Qty.</td>
                    <td><input type="checkbox" name="check" value="item3"></td>
                </tr>
                <tr>
                    <td><img src="images/imp1-small.png" id="imp1" alt="important marker"></td>
                    <td>Item 4</td>
                    <td>Qty.</td>
                    <td><input type="checkbox" name="check" value="item4"></td>
                </tr>
            </table>
            <div class="popup">
                
            </div>
            <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="general.js"></script>
        </main>
        <footer class="themecolor">
            <nav>
                <ul>
                    <li id="add"><a href="add-item">Add</a></li>
                    <li id="options"><a href="options">Options</a></li>
                    <li id="delete"><a href="delete-item">Delete</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>
