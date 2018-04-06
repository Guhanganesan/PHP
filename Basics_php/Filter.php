<?php // FILTER
                        $x= $_GET['name'];
						$y= filter_has_var(INPUT_GET, 'name');
						if($y)
						{
							echo "your input is $x";
						}							
						else
						{
							echo "Variable does not has any value";
						}
?>

<form action="Filter.php" method="get">

 <input type="text" name="name"> </input>
 <br>
 <br>
 <input type="submit" value="submit"> </input>
 
 <br>
 <br>
 
 <?php
$mail = 'guhan@gmail.com';
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address";
}
 else {
    echo "Not Valid";
}
?>

<br>
<br>


<?php
$a = '127.0.0.1';
if (filter_var($a, FILTER_VALIDATE_IP)) {
    echo "Valid IP Address";
}
else
 {
    echo "Invalid IP Address";
}
?>

<br>
<br>
<?php
$B = 'http://localhost/Raghav/Filter.php?name=Anbu';
if (filter_var($B, FILTER_VALIDATE_URL)) {
    echo "Valid URL";
}
else
 {
    echo "Invalid URL";
}
?>
 
</form>

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

<?php
// to genearate a random number in php
echo rand();
?>
<h2> Regular Expression </h2>

<form action="Regular_Expression.php" method="post">

      <input type="text" name="name" >
	  <input type="submit" name="submit" value="submit">
</form>
<?php
     $x=""; $a=""; $b="";
	 if(!empty($_POST['name']))
	 {
		 $x=$_POST['name'];
		 $pattern="/^[a-zA-Z]*$/";
		 if (preg_match($pattern,$x))
										{
											$a="valid Id"; 
										}
										else
										{
											$b="Invalid Id"; 
										}											
	 }	
    echo $a; echo $b;	 
?>



