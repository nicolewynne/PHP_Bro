<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_buttons.php" method="post">
    
        <input type="radio" name="credit_card" value="Visa">
        <label for="">Visa</label>
        <br>
        <input type="radio" name="credit_card" value="Master Card">
        <label for="">Master Card</label>
        <br>
        <input type="radio" name="credit_card" value="American Express">
        <label for="">American Express</label>
        <br>
        <input type="submit" name="confirm" value="confirm">
    </form><br>
</body>
</html>
<?php
    // if(isset($_POST["confirm"])){

        // $credit_card = null;

        // if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You selected {$credit_card}";
        // }
        // else{
        //     echo "Please make a choice";
        // }
            switch($credit_card){
                case "Visa" : echo "You selected Visa";
                break;
                case "Master Card" : echo "You selected Master Card";
                break;
                case "American Express" : echo "You selected American Express";
                break;
                default : echo "Please make a choice";
            }
    // }
?>