<?php
$string ="Payilagam Velachery";

echo strlen($string);
echo "<br>";

echo strtolower($string);
echo "<br>";

echo strtoupper($string);
echo "<br>";

echo substr($string,8);
echo "<br>";

echo str_word_count($string);
echo "<br>";

echo strrev($string);
echo "<br>";

echo "<h2> String Position</h2>";

echo strpos($string, "chery");
echo "<br>";

echo str_replace("Velachery", "", "Chennai");
echo "<br>";
?>
<h2> addcslashes() </h2>

<?php 
 echo addcslashes("Hello World!","l");
 
?>

<h2> addslashes() </h2>
<p>The addslashes() function returns a 
string with backslashes in front of predefined characters. </p>
<?php 
$str = addslashes('This is "my" book');
echo($str); 
?>

<h2> bin2hex() </h2>
<p>The bin2hex() function converts a string of ASCII characters to hexadecimal values. 
The string can be converted back using the pack() function.</p>
<?php 
$str = bin2hex("Hello World!");
echo($str); 
?>

<h2> chop() </h2>
<p>chop() function, which removes the last character in the string. 
characters from the right end of a string.</p>
<?php
$str = "Hello    World!";
//echo $str. "<br>";
echo chop($str,"d!");
?>

<?php
$str = "Hello World!";
//echo $str . "<br>";
echo trim($str,"Hed!"); //ltrim(), rtrim()
?>

<h2> chr() </h2>
<p>The chr() function returns a character from the specified ASCII value.</p>
<?php
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>

<h2> chunk_split() </h2>
<p>The chunk_split() function splits a string into a series of smaller parts.</p>
<?php
$str = "Hello world!";
echo chunk_split($str,2,".");
?>

<h2> convert_uuencode()</h2>
<p>he convert_uuencode() function encodes a string using the uuencode algorithm.</p>
<?php
$str = "Hello world!";
echo convert_uuencode($str);
?>

<h2> convert_uudecode() </h2>
<p>he convert_uudecode() function decodes a uuencoded string.</p>
<?php
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);
?>

<h2>count_chars</h2>
<p>how many times an ASCII character occurs in a string, 
or which characters that have been used or not been used in a string).</p>
<?php
$str = "Hello# World!";
echo count_chars($str,3);
?>

<h2>Join</h2>
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("+",$arr)."<br>";
echo join("-",$arr)."<br>"; 
echo join("X",$arr);
?>

<h2>lcfirst()</h2>
<p></p>
<?php
echo lcfirst("Hello world!");
?>

<h2> md5()</h2>
<?php
      $x="Guhan";
	  echo md5($x);
?>
<h2> crypt()</h2>


<?php
// Set the password
$password = 'mypassword';

// Get the hash, letting the salt be automatically generated
$hash = crypt($password,"mps");
echo $hash
?>
<h2> Explode</h2>
<?php
/* A string that doesn't contain the delimiter will simply
   return a one-length array of the original string.*/

$x = "He is my friend";
print_r (explode(" ",$x));
?>


<h2> sha1</h2>

<?php
      $x="Guhan";
	  echo sha1($x);
?>

<h2>String Compare </h2>

<?php
     $x="Guhan";
	 $y="Guhan"; //  guhan-false
	 if($x==$y)
	 {
		 echo "True";
	 }
	 else
	 {
		 echo "False";
	 }

?>
<h2> Substring</h2>
<?php
     echo substr("Payilagam",-3,2);
?>
<br><br>

<?php
$rest1 = substr("abcdef", -1);    // returns "f"
$rest2 = substr("abcdef", -2);    // returns "ef"
$rest3 = substr("abcdef", -3, 1); // returns "d"

echo $rest1."<br>";
echo $rest2."<br>";
echo $rest3."<br>";
?>

<h2> Pasre String </h2>

<?php
parse_str("My Value=Something");
echo $My_Value; // Something
?>

<h2> Sub String Replace </h2>
<?php
$var = "Payilagam";
echo substr_replace($var,"PPP",2,3);
?>

<h2> String Shuffle</h2>


<?php
$str = 'abcdef';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;
?>













































