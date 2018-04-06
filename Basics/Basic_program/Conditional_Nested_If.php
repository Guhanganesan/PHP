<?php
$x=10;
$y=20;
$z=30;
if($x>$y)
{   if($x>$z)
    {
	echo "<br> X is greater";
    }
   else 
   {
	echo "<br> Y is greater";
    }
}
else if ($y>$z)
{
	echo "Y is greater";
}
else 
{
  echo "Z is greater";
}
?>