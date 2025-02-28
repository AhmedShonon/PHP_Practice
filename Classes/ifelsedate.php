<?php
    $t = date("H");
    if($t<"10"){
        echo "Good Morning";
    }
    else if($t<"20"){
        echo "Have a Good Day";
    }
    else{
        echo "Have a Good Night";
    }
//single line if statement
//1st check the condition if 10==10 then Hello shonon
//will be store in $b then statement echo $b; will be execute
    if(10==10) $b = "Hello Shonon";
    echo $b;
?>