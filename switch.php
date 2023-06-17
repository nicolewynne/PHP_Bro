<?php
$date= date("l");

switch($date){
    case "Monday" :
        echo "I hate Monday";
    break;
    case "Tuesday" :
        echo "Today is Taco Tuesday!!";
    break;
    case "Wednesday" :
        echo "The working week is half over";
    break;
    case "Thursday" :
        echo "Its almost weekend";
    break;
    case "Friday" :
        echo "The weekend is here!";
    break;
    case "Saturday" :
        echo "Let's party!!";
    break;
    case "Sunday" :
        echo "Time to relax";
    break;
    default : echo"{$date} is not valid.";
}
?>