<?php

$user_need =5;
// for($i=0;$i<10;$i++){
//     echo $i;
//     echo "<br>";
//     if($i==$user_need){
//         break;
//     }

// }

//Continue Means Skips
for($i=0;$i<=10;$i++){
    if($i==3 || $i==7){
        continue;
    }
    echo $i;
    echo "<br>";
}

//Here nothing will be print bz every time we are skipping using the continue statement;
// for($i=0; $i<11; $i++){
//     continue;
//     echo "$i";
//     echo "<br>";
// }
?>