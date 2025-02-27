<?php

//logical operator 
//OR ||
//AND &&
//not !
//Xor when only one is true then will return true same time both can't be true

$a =10;
$b =30;
$c= 5;
// if($a==10 and $b==30){
//     echo "Var a has 10 value and b has 30 value";
// }
// if ($a==10 or $b==0){
//     echo "a is true or b is true";
// }

// if ($a==10 xor $b==0){
//     echo "when only one is true";
// }
// if ($a!=11){
//     echo "condition is true";
// }

if($a==10 && $b==30 && $c==5){
    echo "Three conditions are matched";
}
?>