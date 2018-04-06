<?php
     $a=10;
	 echo $a."<br>";
	 $a=20;
	 echo $a."<br>";
	 echo $a++."<br>";;//post increment
	 echo $a."<br>";
	 echo ++$a."<br>";
	 define('x',10);
	 echo x."<br>";
	 define('x',20);
	 echo x."<br>";
	 static $x=20;
	 echo $x."<br>";
	 static $x=40;
	 echo $x."<br>";
?>

<br><br>
<?php
$a =10; // global variable
$b = 20;
function addVar(){
	//$a = 50;
	$x = 5; // local variable
	$y = 10;
	$z = $x+$y;
	global $a,$b;
	
	echo $a+$b;
	echo "<br>";
	echo "$a";// undefined variable
}
addVar();
echo $a;
echo "<br>";
echo $b;
?>
<?php
function playCrick()
{ $a = "Sachin";
  $b = " Tendulkar";
  echo "$a,$b<br>";
}
playCrick(); 

//
function sendMessage($m)
{
	echo "Message sent $m";
}
sendMessage("Successfully!!<br>");
//

function rate($x=12)
{
	echo "Today idly rate is $x<br>";
}
rate(30);// for accessing the default value as 5
       // we can change the default value by assign rate(20);
//
function run($s, $t)
{
	$v= $s/$t;
	return $v;
}   
$w=run(20,4); // $v is a local variable
// echo run(20,4);
//echo "The Speed is:$w Km/hr.";
?>