<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variadic Arguments</title>
</head>
<body>
    

<?php
function myFamily($lastname,...$firstname){
    $text="";
    $len = count($firstname);
    for ($i=0;$i<$len;$i++){
        $text = $text."Hi, $firstname[$i] $lastname.<br>";
    }
    return $text;
    }
$a = myFamily("bin Zahanggir","Rahim","Bokul","Zohurul");
echo $a;


?>
</body>
</html>