<?php
$users =["sabbir","shonon","ahmed","peyas","salman","rahim","mafi"];
array_pop($users);//only can remove single element from last at a time
array_pop($users);
print_r($users);
echo "<br>";
array_push($users,"aditto","Joy");
print_r($users);
echo "<br>";
array_splice($users,-5); //last five elements will be remove at a time which can't be possible using 1 array_pop function 
print_r($users);