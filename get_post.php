<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post">
    <label>quantity:</label>
    <input type="text" name="quantity"><br><br>
    <input type="submit" name="total"><br>
    </form>
</body>
</html>
<?php
    $item = "pizza";
    $price= 6.99;
    $quantity = $_POST["quantity"];
    $total= null;

    $total= $price * $quantity;
    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "The total cost is {$total}";
?>