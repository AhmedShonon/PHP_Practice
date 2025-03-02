<?php
$a = true;
$a =(string) $a;
// var_dump($a);

$b = "300";
$b =(int)$b;
// var_dump($b);

$c = 1;
$c = (string) $c;
// var_dump($c);

$d = "hello";
$d = (boolean)$d;
// var_dump($d);


$e = 0;
// $e = (boolean)$e;
$e = (array)$e;
var_dump($e);


$f=20;
$f = (object)$f; 
var_dump($f);


?>