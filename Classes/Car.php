<?php
 class Car {

     //Properties/Fields
     public $brand; //only this class can access this information
     protected $model; //this class and this class's child or the class which extends this class can access this property
     public $price = 1000;  //we can access from any where
     public $vahicleType = "car";

     //constructor
     public function _constructor($brand, $model= "none", $price) {
         $this-> brand = $brand;
         $this->model = $model;
         $this->price = $price;
     }

 }

 $car01 = new Car("Volvo", "s9", "$1000");
 echo $car01->brand;