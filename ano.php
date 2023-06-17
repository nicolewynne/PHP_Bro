<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ano.php" method="post">
    
        <label for="">First Number</label>
        <input type="number" name="fnum">
        <label for="">Second Number</label>
        <input type="number" name="snum">
        <br>
        <input type="submit" name="calculate" value="calculate">
    </form><br>
</body>
</html>
<?php
    if(isset($_POST["calculate"])){
        echo 'sum - ' . ($_POST['fnum'] + $_POST['snum']);
    }
?>