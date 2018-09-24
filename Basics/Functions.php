<?php
$a =10; 		// global variable
$b = 20;
function addVar(){
	$x = 5; 	// local variable
	$y = 10;
	$z = $x+$y;
	global $a,$b;
	
	echo $z."<br>";		//15
	echo $a+$b; 		//30
	echo "<br>";
	echo "$a<br>";		//10
}
addVar();
echo $a;//10
?>

<hr>

<?php
function playCrick()
{ $a = "Sachin";
  $b = " Tendulkar";
  echo "\$a,$b<br>";//   $a, Tendulkar
}
playCrick(); 

/*-----------------------------*/

function sendMessage($m)
{
	echo "Message sent $m";
}
sendMessage("Successfully!!");

/*-----------------------------*/

function rate($x=12)
{
	echo "<br> Today idly rate is  $x <br>";
}
rate(4);// for accessing the default value as 5
       // we can change the default value by assign rate(20);
/*------------------------------*/
	   
	   
	   
function run($s, $t)
{   
    $s=40;
	$t=5;
	$v= $s/$t;
	return $v;
}   
$w=run(20,4); 
echo "The Speed is:$w Km/hr.<br>";

/*------------------------------*/


function speed($s,$t)
{   
    $v= $s/$t;
	return $v;
}   
$w=speed($t=4,$s=20); 
echo "The Speed is:$w Km/hr.<br>";

/*-----------------------------*/

?>


Answers:-

15
30
10
10
$a, Tendulkar
Message sent Successfully!!
Today idly rate is 4 
The Speed is:8 Km/hr.
The Speed is:0.2 Km/hr.
