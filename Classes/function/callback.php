<?php

function name(){
    echo "I am shonon";
}

function age(){
    echo "I am 23+";
}

$var1 = "name"; //storing name() function into variable($var1)
// $var1();
$var2 = "age"; //storing age() function into variable($var2)
// $var2();

function callback($c){
    echo $c();
    echo '<br>';
}

callback($var1);
callback($var2);
?>