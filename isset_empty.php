<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label for="">Enter Your Name:</label>
        <input type="text" name="name"><br>
        <label for="">Enter Your Password</label>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="log in">
    </form><br>
</body>
</html>
<?php
    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["login"])){

        // echo "You tried to log in";
        $username = $_POST["name"];
        $password = $_POST["password"];

        if(empty($_POST["username"])){
            echo "The username is missing";
        }
        elseif(empty($_POST["password"])){
            echo "The password is missing";
        }
        else{
            echo "Hello+{$username}";
        }
    }
?>