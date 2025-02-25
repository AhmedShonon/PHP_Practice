<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <?php

    define('first_name','sabbir');
    echo defined('first_name');//return boolean
    echo "<br>";
    echo first_name;//return value

    const last_name = 'shonon';
    echo "<br>";
    echo last_name;
    echo "<br>";

    /**
     * in the if statements we can use define function but we can't use const
     */
    if(true){

        // const Foo = bar; can't use it
        define('Status_paid', 9);
    }

    $paid = 'PAID';
    // define('STATUS_'.$paid,$paid);
    define('STATUS_'.$paid,4);
    echo STATUS_PAID;
    ?>
</body>
</html>