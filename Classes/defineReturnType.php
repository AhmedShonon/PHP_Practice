<?php declare(strict_types=1); // strict requirement
// function addNumbers(float $a, float $b) : float {
//   return $a + $b;
// }
// echo addNumbers(1.2, 5.2);

// function addNumbers(float $a, float $b) : int {
//   return (int) ($a + $b);
// }
// echo addNumbers(1.2, 5.2); 

function addNumbers(float $a, float $b) : float { //because of float return type output is 6.0
  return (int) ($a + $b); //1.2+5.2 = 6.4 =6
}
//return type float but explicitly converting into integer  but ultimate result is float 
echo addNumbers(1.2, 5.2); 
?>