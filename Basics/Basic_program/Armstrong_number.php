
<?php
$m = 370; $r=0; $s=0;
for($i=0; $i<3; $i++)
{ 
$r=$m%10;
$s=$s+pow($r,3);
$m = $m/10;
}
echo $s."<br>";
if($s=$m)
{
	echo "Given Number is an Armstrong Number";
}	
?>