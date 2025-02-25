<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class car {
        public $color;
        public $model;
        public function __construct($cons_color,$cons_model){
            $this->color = $cons_color;
            $this->model =$cons_model;
        }  
    }
    $mycar = new car("black","BMW");
    var_dump($mycar);
    ?>
</body>
</html>