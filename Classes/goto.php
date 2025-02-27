<?php
// $x = 20;
// echo "Before Condition <br>";

// if($x==20){
//     goto jump;
// }

// $name = "Shonon";
// echo "My name is $name<br>";

outsideLoop:
echo "Loop is break";

// jump:
// echo "The Statement is Jumped on line 15";
for ($i=0;$i<10;$i++){

 echo "$i <br>";

 if($i==5){
    goto outsideLoop;
 }

}

// outsideLoop:
// echo "Loop is break";

?>