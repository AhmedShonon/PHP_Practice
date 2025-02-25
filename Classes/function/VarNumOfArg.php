<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   function sumMyNumbers(...$x){
    $n =0;
    $len=count($x);
    for($i=0; $i<$len; $i++){
        $n += $x[$i];
    }
    return $n;
    }
    $a = sumMyNumbers(4,5,7,9,11,14,15,32);
    echo "Sum= $a <br>";

    function SumvarNumArg(...$y){
        $n =0;
        $len=count($y);
        for($i=0;$i<$len;$i++){
            $n+=$y[$i];
        }
        return $n;
    }
    $a = SumvarNumArg(1,4,5,7,11);
    echo "sum= $a";
    ?>
</body>
</html>

