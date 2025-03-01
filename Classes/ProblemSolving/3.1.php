
<?php
// 3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document.
// Sample Output :

// PHP Tutorial
// PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
// Go to the PHP Tutorial.
// Declare and initialize a variable with the value 'PHP Tutorial'
$var = 'PHP Tutorial';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$var";?> W3resource</title>
</head>
<body>
    <h2><?php echo $var; ?></h2>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href="https://www.w3schools.com/php/php_form_complete.asp">Go to the <?php echo $var; ?></a></p>
</body>
</html>

