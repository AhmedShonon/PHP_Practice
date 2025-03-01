<?php
$employeeInfo = [
    [1,"Shonon",12000,"Bogura","Job Dhaka", "sabbi@gmail.com"],
    [2,"Rahim",1200000,"Sherpur","Job Bogura", "rahim@gmail.com"],
    [3,"Domi",1200000,"Upozilla","Job Bogura", "domi@gmail.com"],

];

for($i=0;$i<count($employeeInfo);$i++){
    for($j=0;$j<count($employeeInfo[$i]);$j++){
        echo $employeeInfo[$i][$j];
        echo "<br>";
    }
}

?>