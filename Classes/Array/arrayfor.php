<?php

$users = ["Sabbir", "Shonon", "Ahmed", "Ab. Rahim", "Shammi","Manik", "Anonno", "Sojib", "Maisha","Fabiha", "Niloy", "Peyas"];
for ($user=0; $user<count($users);$user++){
    echo "<h3 style='color:Gray'>User Name is: $users[$user] <h3>";
    //h3 itself create a new line so don't need to use echo "<br>" explicitly; 
}
?>