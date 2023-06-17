<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="post">
        <label for="">Enter a number</label>
        <input type="text" name="number"><br>
        <input type="submit" value="submit">
    </form><br>
</body>
</html>
<?php
    
    $number = $_POST["number"];
   
    $remainder = is_even($number);

    function is_even($number){
        $remainder = $number % 2;
        return $remainder;
    }
        // echo $remainder;
    if($remainder==0){
        echo "Your number is even";
    }
    else {
        echo "Your number is not even";
    }


    // $number = $_POST["number"];
    // function is_even($number){
    //     $result = $number % 2;
    //     return $result;
    // }
    // $result = is_even($number);

    // if($result==0){
    //     echo "Your number is even";
    // }
    // else {
    //     echo "Your number is not even";
    // }
?>