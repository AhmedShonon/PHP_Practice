<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments</title>
</head>
<body>
    <?php
    function identity($first_name){
        echo "$first_name "."bin Zahanggir<br>";
    }
    identity("Abdur Rahim");
    identity("Abdur Hakim");
    identity("Zohurul Islam");
    identity("Bokul");

    function ageGender($age,$gender){
        echo "My age is:$age. My Gender is:$gender<br>";
    }
    ageGender(25,"Male");
    ageGender(24,"Female");
    ageGender(29,"Female");
    ageGender(21,"Male");
    ageGender(23,"Male");
    ageGender(29,"Female");

    function setHeight($minHeight = 5){
        echo "My height is:$minHeight ft <br>";
    }
    setHeight(5.5);
    setHeight(6);
    setHeight(7.5);
    setHeight(8.5);
    setHeight();
    ?>



</body>
</html>