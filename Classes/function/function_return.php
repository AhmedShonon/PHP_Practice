<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RETURN</title>
</head>
<body>
    <?php
    function sumInt($x,$y){
        $z=$x+$y;
        return $z;
    }
    echo "Sum of 11+11= ".sumInt(11,11).'<br>';
    echo "Sum of 30+10= ".sumInt(30,10).'<br>';
        echo "Sum of 11+100= ".sumInt(11,100).'<br>';
    ?>
</body>
</html>