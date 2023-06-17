<?php
$foods = array("apple", "mango", "orange", "kiwi", "banana");

array_push($foods, "lemon");
array_pop($foods);
array_shift($foods);
// $foods = array_reverse($foods);

foreach($foods as $food){
    echo $food . "<br>";
}
?>