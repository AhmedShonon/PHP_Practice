<?php
$users = [
    [1,"sabbir","Dhaka",200111,"sabbir@edu.com"],
    [2,"rahim","Bogura",197111, "rahim@gmail.com"],
    [3,"shammi","Bohura",197608, "shammi@gmail.com"]
];

// echo "<pre>";
// print_r($users);
// // echo "<pre>";

for($i=0;$i<count($users);$i++){
    // echo "<pre>";?
    // print_r($users[$i]);
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo "<br>";
    }
}

?>