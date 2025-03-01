<?php
$users = ["Sabbir", "Shonon", "Ahmed", "Ab. Rahim", "Shammi","Manik", "Anonno", "Sojib", "Maisha","Fabiha", "Neloy", "Peyas"];
foreach($users as $user){
    //  if($user == "Shammi"){
    //     continue; //continue = skip
    // }
    echo "<h1 style='color:red'>Users Name: $user<h1>";
    if($user == "Shammi"){
        break;
    }
}
echo "<hr>";
//2nd way to use foreach loop

foreach($users as $user):
    echo $user;
    echo "<br>";
endforeach;
?>