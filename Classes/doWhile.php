<?php
// $num = 10;
// do{
//     echo "Current loop value is $num<br>";
//     $num--;

// }
// while($num>=0);

// $num =0;
// do{
//     echo "The current number is $num<br>";
//     $num++;
// }
// while($num<=10);

$i = 0;
do{
    if ($i == 3) break;
    echo $i;
    $i++;
    echo "<br>";
}

while($i<10);
?>