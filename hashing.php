<?php
$password = "taylor13";
$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash;

if(password_verify("taylor13", $hash)){
    echo "You are logged in";
} else {echo "Incorrect password";}
?>