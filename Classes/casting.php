<?php
$x = "100";
$y = (int)$x;
var_dump($y);
echo"<br>";
echo strlen("SHONON");
echo"<br>";
echo str_word_count("Hello Shonon Allah is inviting you to Jannah");
echo"<br>";
echo strpos("As-Salamu_alykum Arnob Bhaiya", "Arnob");




$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 

<?php

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>When converting into arrays, most data types converts into an indexed array with one element.</p>

<p>NULL values converts to an empty array object.</p>

</body>
</html>

?>
