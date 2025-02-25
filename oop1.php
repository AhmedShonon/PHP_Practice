<?php
$brand = 'Volvo';
$color = 'green';

function getCarInfo($brand, $color){
    return "Brand: " .$brand.  "<br>Color: " .$color;
}
ECHO getCarInfo($brand, $color);