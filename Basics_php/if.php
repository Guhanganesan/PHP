<?php

$x=23;
$y="23";

if($x==$y) // Returns true if $x and $y have the same key/value pairs
{
   echo "True"; 
   
}
else
{
	echo "False";
}
	

if($x===$y) // Returns true if $x and $y have the same key/value pairs in the same order and of the same types
{
	echo "True"; 
}
else
{
	echo "False";
}

?>

<br><br>


<?php
$x = 10;  
echo ++$x."<br>";  // 11

$y=$x;

$y--;     // 10

echo $y."<br>";

$m=$y;

echo --$m."<br>";  // 9

$n=$m;  

echo $n++;   // 9  see looping concept

?>  

<!-- Variable Declaration-->
<br><br>


<?php

$name = "Guhan";

$_name = "anbu";


//$5anbu  = " Ravi"; // false


$a54_x = "kathir";

echo $name."<br>";

echo $_name."<br>";

//echo $5anbu."<br>";

echo $a54_x."<br>";


?>








