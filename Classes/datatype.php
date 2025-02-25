<?php

echo "<h1> Data Types <h1>";
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";

var_dump($y);
echo "<br>";

$z = 5;
var_dump($z);
echo "<br>";

$f = 10.365;
var_dump($f);

$blan = true;
echo "<br>";
var_dump($blan);

$cars = array("Volvo","Toyota", "BMW", "Mercedec");
var_dump($cars);

//Converting the null data type into string
$n = null;
var_dump($n);
$n = (string)$n;
var_dump($n);

//converting the integer data type into string using casting

$p = 5;
echo "<br>";
var_dump($p);
$p = (string)$p;
var_dump($p);

echo "My name is $p <br>";
echo 'My name is $p' . '<br>';
echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo '<br>';

$boolea = true;
var_dump($boolea);
