<h2> String </h2>
<?php
     $x="1001";
	 $x[1]="1";
	 $x[2]="1";
	 $x[4]="0";
	 echo $x;
?>

<h2> String Position</h2>
<?php
$s1 = 'Payilagam';
$s2 = 'lagam';
if (strpos($s1,$s2)) 
{
    echo "True";
} 
else
{
    echo "False";
}
?>
  <h2> Checking data types</h2>
  <br>
<?php
     $x=0100;
	 $y="100";
	 if($x==$y)
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
     $x=100;
	 $y="100";
	 if($x==$y)
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
     $x=100;
	 $y="100";
	 if($x===$y)
	 {
		 echo "True";
	 }
	 else
	 {
		 echo "False";
	 }
?> 
 <br><br>
 
 <h2> ===</h2>
<?php
     $x="0100";
	 $y="100";
	 if($x===$y)
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
     $x="100";
	 $y="100";
	 if($x===$y)
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
     var_dump(0100==100); // 0100 treat as octal values
	 var_dump("0100"==100);
	 var_dump("0100"===100);
?>

<h2>Boolean </h2>
<?php
    $x = true;
	$y=false;
	echo $x;
?>
<br><br>
<?php	
	$y=false;
	if($y==false)
	{
		echo "False";
	}
	else
	{
		echo "True";
	}
?>

<h2> Automatic type conversion </h2>

<?php
     $x="3";
	/* $x+=3;
	 echo $x; */
	 $x = $x * "10 Bikes are running";
	 echo $x;
?>
<br><br>
<?php
     $a = "1H1";
     $a = $a + 1;
     echo $a;
?>

<br><br>
<?php
     $x="10";
     echo ($x==10 ? "True" : "False");
?>


<?php
/*
require_once('class.db.php');

$sql = "SELECT title FROM links";
$result = mysql_query($sql, $db->connection);

$defaults = array(
     array('title' => 'None'), 
     array('title' => 'Unknown')
);

while ( ($row = mysql_fetch_assoc($result)) 
     || ($row = array_shift($defaults))) 
{
  echo $row['title'] . "<br>";
}
*/
?>















