<?php
    setcookie("fav-food", "pizza", time()+(86400*2), "/");
    setcookie("fav-drink", "coffee", time()+(86400*3), "/");
    setcookie("fav-dessert", "ice-cream", time()+(86400*4), "/");

    // foreach($_COOKIE as $key=>$value){
    //     echo "{$key} = {$value} <br>";
    // }
        "<br><br>";
    if(isset($_COOKIE["fav-food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!! ";
    }
    else{
        echo "I don't know your favorite food";
    }
?>