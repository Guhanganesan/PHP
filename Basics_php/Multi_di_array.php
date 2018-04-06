<?php
$t= array(
			array("A","B","C"),
			array("A1","B1","C1"),
			array("A2","B2","C2"),

);
//echo $t[0][2];
for($i=0; $i<3; $i++)
{
	for($j=0;$j<3; $j++)
	{
	   echo$t[$i][$j];	   
	}
	echo "<br>";
}
?>
