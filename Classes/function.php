<?php

function addNum(...$x){
    $sum= 0;
    $len = count($x);
    for($i=0; $i<$len; $i++){
        $sum+=$x[$i];
    }
    return $sum;
}
$a = addNum(2,5,7,9,11,13);
echo $a;