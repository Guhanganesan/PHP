<?php
				$string ="Payilagam Velachery";
				echo "<h2> length</h2>";
				echo strlen($string);
				echo "<br>";
/*-----------------------------------------------------------------------------------------*/
				echo "<h2> lowercase</h2>";
				echo strtolower($string);
				echo "<br>";

/*-----------------------------------------------------------------------------------------*/


				echo "<h2> uppercase</h2>";
				echo strtoupper($string);
				echo "<br>";

/*-----------------------------------------------------------------------------------------*/


				echo "<h2>substring</h2>";
				// substr ( string $string , int $start [, int $length ] )
				echo substr("Anbarasan",3, 4); // length 4-- aras , 3-starting
				echo "<br>";

/*-----------------------------------------------------------------------------------------*/


				echo "<h2>word count</h2>";
				echo str_word_count("Guhan anbu");
				echo "<br>";

/*-----------------------------------------------------------------------------------------*/

				echo "<h2>Reverse</h2>";
				echo strrev("Aagaaya Vennila");
				echo "<br>";

 /*-----------------------------------------------------------------------------------------*/
				echo "<h2>Position</h2>";
				$x="This is my php page";
				$y=strpos($x, "php");
				if($y==true)
				{
					echo "String is available";
					
				}
                else
				{
					echo "Not Available";
				}
			
				
		/*-----------------------------------------------------------------------------------------*/
					

				echo "<h2>Replace</h2>";
				echo str_replace("68698", "", "75697698");
				echo "<br>";
				
		/*-----------------------------------------------------------------------------------------*/

				$old="velary";
				$insert="che";
				$position=2;

				echo substr_replace($old, $insert, $position,1); //vcheary

?>
<h2> chop() </h2>
<p>The chop() function removes whitespaces</p>
<?php
$str = "Hello            World!";
echo chop($str);
?>

<br>
<br>
<h2> chunk_split() </h2>
<p>The chunk_split() function splits a string into a series of smaller parts.</p>
<?php
$str = "Hello world!";
echo chunk_split($str,2,"."); //He.ll.o .wo.rl.d!.
?>

<br>
<br>
<h2> convert_uudecode() </h2>
<p>he convert_uudecode() function decodes a uuencoded string.</p>
<?php
$str = "Hello world!";
echo convert_uuencode($str);
?>


<br>
<br>
<h2>Join</h2>
<p></p>
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>"; 
echo join("X",$arr);
?>


<?php
echo "<h2>Trim</h2>";
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");//llo Worl 
?>


<br>
<br>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>


<br>
<br>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
?>

<br>
<br>
<?php
$pass = 'mypassword';
echo crypt($pass)."<br><br>";
?>

<br>
<br>

<?php

echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT)."<br>";
?>

<br>
<br>

<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>


<br>
<br>

<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode($arr);
?>


<br>
<br>
<?php
echo str_repeat("A<br>",4);
?>
<br>
<br>
<?php
parse_str("name=Peter&age=43&mob=9878"); // query string into variables
echo $name."<br>";
echo $age."<br>";
echo $mob;
?>


<br>
<br>
<?php  
$string1='xyz';  
$string2='xym';  
$result=strcmp($string1,$string2);  
if($result==0) //1  
{
	echo "verified";
}
else
{
	 echo "Not-Verified";
}
?>  

<br>
<br>
<?php
echo strcasecmp("Hello","HEllO");
echo "<br>";
echo strcasecmp("HEllo","hELLo");
echo "<br>";
echo strcasecmp("HEll","hELLo");
?>
