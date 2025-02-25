<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="GetPost.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>password:</label><br>
        <input type="password" name="password"><br>

        <input type="submit" name="log in">
    </form>
</body>
</html>

<?php 
    //$_GET, $_POST = Special variable used to collect data from an HTML form data is sent to the file in the action attribute of <form>
    //<form action="some_file.php" method="get">
     
    //$_GET is not secure
    //$_POST is secure

    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]}";
    // echo $_GET["username"].'<br>';
    // echo $_GET["password"];


?>