<?php

$users = [
    ["name"=> "Shonon", "age"=> 23, "city"=> "Dhaka"],
    ["name"=> "Ab. Rahim", "age"=> 49, "city"=> "Bogura"],
    ["name"=> "Domi", "age"=> 45, "city"=> "Bogura"]

];

// print_r($users);

foreach($users as $user ){
   foreach($user as $key => $item){
    echo "Key =$key & value= $item";
    echo "<br>";
   }
   echo "<hr>";
}
?>