<?php

$users = [
    ["name"=> "Shonon", "age"=> 23, "city"=> "Dhaka"],
    ["name"=> "Ab. Rahim", "age"=> 49, "city"=> "Bogura"],
    ["name"=> "Domi", "age"=> 45, "city"=> "Bogura"]

];

// print_r($users);
echo "<table border=2>";
foreach($users as $user ){
    echo "<tr>";
   foreach($user as $key => $item){
    echo "<td>";
    echo "$key => $item";
    // echo "<br>";
    echo "</td>";
   }
   echo "</tr>";
//    echo "<hr>";
}
?>