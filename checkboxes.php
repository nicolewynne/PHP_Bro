<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        <label for="">Pizza</label>
        <br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        <label for="">Hotdog</label>
        <br>
        <input type="checkbox" name="hamburgar" value="Hamburgar">
        <label for="">Hamburgar</label>
        <br>
        <input type="checkbox" name="ramen" value="Ramen">
        <label for="">Ramen</label>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        // if(isset($_POST["food"])){
        //     $food = $_POST["food"];
        // }
        // switch($food){
        //     case "Pizza": echo "You like Pizza";
        //     break;
        //     case "Hotdog": echo "You like Hotdog";
        //     break;
        //     case "Hamburgar": echo "You like Hamburgar";
        //     break;
        //     case "Ramen": echo "You like Ramen";
        //     break;
        //     default: echo "Please make a choice";
        // }

        if(isset($_POST["pizza"])){
            echo "You like pizza <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog <br>";
        }
        if(isset($_POST["hamburgar"])){
            echo "You like hamburgar <br>";
        }
        if(isset($_POST["ramen"])){
            echo "You like ramen <br>";
        }
        if(empty($_POST["pizza"])){
            echo "You don't like pizza <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You don't like hotdog <br>";
        }
        if(empty($_POST["hamburgar"])){
            echo "You don't like hamburgar <br>";
        }
        if(empty($_POST["ramen"])){
            echo "You don't like ramen <br>";
        }

        // if(isset($_POST["food"])){
        //     echo "You like pizza <br>";
        // }
        // if(isset($_POST["food"])){
        //     echo "You like hotdog <br>";
        // }
        // if(isset($_POST["food"])){
        //     echo "You like hamburgar <br>";
        // }
        // if(isset($_POST["food"])){
        //     echo "You like ramen <br>";
        // }
        // if(empty($_POST["food"])){
        //     echo "You don't like pizza <br>";
        // }
        // if(empty($_POST["food"])){
        //     echo "You don't like hotdog <br>";
        // }
        // if(empty($_POST["food"])){
        //     echo "You don't like hamburgar <br>";
        // }
        // if(empty($_POST["food"])){
        //     echo "You don't like ramen <br>";
        // }

    }
?>