<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="ifstatement.php" method="post">
        <label for="">Work hours</label>
        <input type="text" name="hours">
        <input type="submit">
    </form> -->
</body>
</html>
<?php
    $hours= 40;
    $rate= 15;
    $weekly_pay= null;

    if($hour<=0){
        $weekly_pay=0;
    }
    else if($hours<=40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours-40) * ($rate*1.5));
    }
    echo "You made \${$weekly_pay} this week";
?>