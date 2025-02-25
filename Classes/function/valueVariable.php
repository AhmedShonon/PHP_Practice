<?php


$var1 = "Hello";
$$var1 = "Hi"; //here $$var1="Hi" means value of $var1 will be new variable so $Hello is new variable and $Hello=Hi this is the new variable and data
echo $Hello;
echo"<br>";
echo $$var1;
echo"<br>";
echo $var1;
