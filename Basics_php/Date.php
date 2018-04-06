<?php
$x=date("d/m/y"); // "y/m/d"
$y=date("h:i:sa");

echo $x."<br>";

echo $y."<br>";
 
?>

<?php

echo time();

?>

<br>

<?php
$t = 1504702960 ;
echo(date("m/d/y  h:i:s", $t));
?>
<br><br>
<!-- mktime(hour, minute, second, month, day, year) -->

<?php
echo mktime(16, 20, 12, 6, 9, 2017); //The mktime() function is used to create the timestamp based on a specific date and time.
?>
<br><br>
<?php
$t = 1497018012;
echo(date("m/d/y  h:i:s", $t));
?>
