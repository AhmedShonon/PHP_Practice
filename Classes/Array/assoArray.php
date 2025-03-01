<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
echo "<hr>";
$userDetails = [
    "name"=> "Shonon", 
    "age"=> 23, 
    "city"=>"Dhaka", 
    "id"=> 1,
    "mail"=>"sabbir@dhaka.com"
];
//  echo $userDetails["name"];
//  echo "<br>";
//  echo $userDetails["age"];
//  echo "<br>";
//  echo $userDetails["city"];
//  echo "<br>";
//  echo $userDetails["mail"];
//  echo "<br>";
//  echo "ID:". $userDetails["id"];
//   echo "<br>";


foreach($userDetails as $data){
 echo "<h3 style= 'color:gray'>User value is $data<h3>";
}

echo "<hr>";
foreach($userDetails as $key => $data){
 echo "<h3 style= 'color:gray'>User $key is $data<h3>";
}

echo "<hr>";
$employeeInfo =[
    "Name" => "Md. Kuddus Boyati",
    "Position" => "HR",
    "Age" => 25,
    "City" => "Bogura",
    "Email"=> "Kuddus@bg.com"
];
foreach ($employeeInfo as $key => $data):
    echo "<h3>Employee $key is $data</h3>";

endforeach;
?>