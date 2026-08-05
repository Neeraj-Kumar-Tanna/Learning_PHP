<?php
    //conditional statements....

    $age = 1000;

    if($age >= 18){
        echo "you can vote";
    }
    else if($age == 0){
        echo "just born";
    }
    else if($age < 0){
        echo "invalid age ";
    }
    else{
        echo "teen age";
    }
?>