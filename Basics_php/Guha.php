<?php
$x="AMMA";
$n="";
$m=strlen($x);
for($i=$m-1; $i>-1; $i--)
{
	$n=$n.$x[$i];
}
echo $n."<br>";

if($x==$n)
{
	echo "Given string is palindrome";
	
}
?>
