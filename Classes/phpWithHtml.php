<?php
$h2_color="pink";
 echo "<h1 style='color:gray'>php with html larger heading tag</h1>";
    echo "<h6 style='color:gray'>Smallest h1 tag</h6>";
?>

<?php
$name="SHONON";
$age="25";
echo "<h1 style='color:red'> $name</h1>";

?>
<h2 style="color:<?php echo $h2_color;?>" >
    My real name is   <?php echo "$name";?>
</h2>
<h2 style="color:<?php echo $h2_color;?>" >
    My age is  <?php echo "$age";?>
</h2>
<h2 style="color:<?php echo $h2_color;?>" >
    My hobby is  <?php echo "Coding";?>
</h2>

