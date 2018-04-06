<?php
$name="Guhan"; // normal variable
$$name="Ganesan"; // reference variable
//echo $$name;
echo $Guhan."<br>";

$R ="Ravi";

${$R}="Karthi";
	
echo $Ravi."<br>";
?>

<?php
echo "<h1>Operators</h1>";

$a =30;
$b = 10;
$c = $a+$b;
$d = $a/$b;
$e = $a%$b;
$f=$a+5;             //$f = $a++;
echo "$a+$b<br>";
echo $a+$b;
echo "<br>$c<br>";
echo "$d<br>";
echo "$e<br>";
echo $f;
if($a==$b)
{
	echo "true<br>";
}
else
{
	echo "false<br>";
}
$x ="Guhan";
switch($x)
{
	case "Anbu":
	echo "Java<br>";
	break;
	case "Guhan":
	echo "PHP<br>";
	break;
}
$m=0;
while($m<5)
{
	$m++;
	echo "$m";
}

$n=0;
do
{
	$n++;
	echo "$n";
}
while($n<5)
?>