<h2> Variable Scope</h2>

<h2> Local Variable</h2>
<?php
$a =10; // global variable
$b = 20;
function addVal(){
	$a = 50;
	$x = 5; // local variable
	$y = 10;
	$z = $x+$y;
	/*echo $z;
	echo "<br>";
	echo "$a";// undefined variable */
	return $z;
}
 $m1=addVal();
 echo $m1;
//addVal();

?>

<h2> Global Variable</h2>

<?php
$a =10; // global scope
$b = 20;
function addVar(){
	
	global $a,$b;
	$a = $a-$b;
	echo $a;
	}
addVar();
?>

<h2> Function Calling </h2>

<?php
				function playCrick()
				{ $a = "Sachin";
				  $b = " Tendulkar";
				  echo "$a&nbsp;$b<br>";
				}

				function sendMessage($m)
				{
					echo "Message sent $m";
				}

				function rate($x=5)
				{
					echo "Today idly rate is $x<br>";
				}

				function run($s, $t)
				{
					$v= $s/$t;
					return $v;
				}
				playCrick();   
				sendMessage("Successfully!!<br>");
				rate(30);
				$w=run(20,4);

                echo "The Speed is:$w Km/hr.";
?>



