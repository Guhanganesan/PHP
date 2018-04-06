<?php
echo date("d/m/y"); 
?>
<?php
$tomorrow = mktime(0, 0, 0, date("m"), date("d")+1,/* if +4 means it adds 4 days from
cuurent day*/ date("y")); 

echo "Tomorrow is ".date("d/m/y", $tomorrow); 

// syntax: mktime(hour, minute, second, month, day, year, daylight savings time)
?>
