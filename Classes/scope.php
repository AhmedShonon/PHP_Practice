<?php
/**
 * there are three scope exists 
 * 1. global
 * 2. local means inside the function
 * 3. static
 */
//global scope

$g1 = "global scope 1";
$g2 = "global scope 2";
$x=10;
$y=15;

function globaltest(){
    global $g1; //without globally declaring we can't use global variable inside the function like local 
    echo "Variablen g1 inside function is: ". $g1;
    echo "</br>";
}
globaltest();

echo 'Variable outside the function global variables $g1 is='. $g1;
echo "<br>";

function mytest(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    return $GLOBALS['y'];
}
echo mytest();
echo "<br>";
echo $y;
echo "<br>";


//Local Scope
function localScope(){
    $local1 = 100;
    $local2 =200;
    return $local2+$local1;
}
echo localScope();

//static 

function staticScope(){
    static $variablex = 0;
    echo '<br>';
    echo $variablex;
    $variablex++;
    // echo '<br>';
    // echo $variablex;
}
staticScope();
staticScope();
staticScope();
staticScope();