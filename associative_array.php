<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_array.php" method="post" >
        <label for="">Enter a country:</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form><br>
</body>
</html>
<?php
    $capitals = array(
                    "USA" => "Washington D.C",
                    "Myanmar" => "Yangon",
                    "England" => "London",
                    "France"  => "Paris"
    );

    $capital = $capitals[$_POST["country"]];

    echo "The capital of the country is {$capital}";



    // $keys = array_keys($capitals);
    // $values = array_values($capitals);
    // $capitals = array_reverse($capitals);
    // $capitals = array_flip($capitals);

    // foreach($capitals as $key => $value){ 
    //     echo "{$key}={$value}<br>";
    // }
?>