<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_validate.php" method="post">
        <label for="">Name</label>
        <input type="text" name="name"><br>
        <label for="">Age</label>
        <input type="text" name="age"><br>
        <label for="">Email</label>
        <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form><br>
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        // $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "the number wasn't valid <br>";
        }
        else{
            echo "You are $age years old <br>";
        
        }
           
       // echo "Hello {$name} <br>";
        // echo "You are {$age} years old <br>";
        // echo "Your email is {$email}";

    }
?>