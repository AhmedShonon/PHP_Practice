<?php
//$name1 = "Shonon";
////here passing the local into the function parameter
// function getName($name){
//    //function's local variable $name
//    // $name = "ahmed";
////     global $name;
//     echo $name;
// }
// echo $name1;
// echo "<br>";
// getName($name1);
//echo "<br>";
//
//
////2nd way to use global as local
//$age = 25;
//  function getAge(){
//
//      global $age;
//      echo $age;
//  }
//  getAge();


  $nam = "Shonon";
  function getName(){
      global $nam;
      $nam = "Sabbir";
      echo $nam;
  }
  getName();


  $nam = "Anil";
  function testnam(){
      $nam ="Peter";
      echo $nam;
      function innerTest(){
          global $nam;
          echo $nam;
      }
  }

  testnam();
  echo "<br>";
  innerTest();
  echo "<br>";
  echo $nam;
?>