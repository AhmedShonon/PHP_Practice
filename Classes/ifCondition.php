<?php
$age = 11;
$name = "Sabbir Ahmed Shonon";


//If Condition

// if($age<10){
//     echo "Display Kinds Content";
//     echo '<br>';
// }
// if($name == "Ahmed Shonon"){
//     echo "Welcome, Ahmed SHONON";
// }

// if($name == "Sabbir Ahmed Shonon"){
//     echo "<h1>Welcome, Sabbir Ahmed SHONON</h1>";
// }

//If Else Condition
//Always need to use == to compare not use single =
// if($age==9){
//     echo "Your age is $age";
// }
// else 
// echo "Your age is not nine";

if($age>18){
    echo "Welcome to the Page";
    echo "<br>";
}
else {
    echo "Sorry!!!! you are under age";
    echo "<br>";
}

if($name == "Sabbir Ahmed Shonon"){
    echo "Welcome $name";
    echo "<br>";
}
else {
    echo "This user(-> $name <-) is not available in our database";
}
?>