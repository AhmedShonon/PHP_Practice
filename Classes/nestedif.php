<?php
$a =  13;
// $a = 1;
if ($a>10){
    echo "Above 10";
    if ($a>11){
        echo " And above 11";
        if($a>12){
            echo " And also above 12";
        }
    }
}
else {
    echo " $a is less than or equal to 10";
}

?>