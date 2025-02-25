<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass By Reference</title>
</head>
<body>
    <?php

    function add(&$value){
        $value+=5;
        return $value;
    }
    $num =10;
    add($num);
    echo($num);
    ?>
</body>
</html>