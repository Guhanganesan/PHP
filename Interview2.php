1. Reverse "Payilagam" using looping method
2. Write the different encryption methods in string
3. How to find the position of a char in a string?
4. How to replace "Chennai" into "Velachey".
5. How to conevert string value to array values.
6. How to remove "Vahy" from "Velachey".
7. How to replace "Kannan" to "Kamban".
8. Write a program to remove duplicates in a given string.


<?php
       $s = "Payilagam";
	   echo strlen($s)."<br>";
	   echo strpos($s, "i")."<br>";
	   echo strtolower($s)."<br>";
	   echo strtoupper($s)."<br>";
	   echo sha1($s)."<br>";
	   echo crypt($s,"lagam")."<br>";
	   echo md5($s)."<br>";
	   echo str_replace("Payilagam"," ","Chennai")."<br>";
	   echo substr($s, 2)."<br>";
	   echo substr($s, 2,6)."<br>";
	   echo substr_replace($s, "xyz",1,4)."<br>";
	   // 1->strat, 4-> length aftre the replaced elements
	   echo str_shuffle($s)."<br>";
	   //$m= str_split($s)."<br>";
	   //print_r($m);
	   $s="Hi dear friend";
	   $m= explode(" ",$s);
	   print_r($m);
	   
	   $p="Vignesh";
	   
	   $n =trim($p, "Vhg");
	   echo $n;
?>

<?php
           // Remove Duplicates
           $name="Payilagam";
	   $arr=str_split($name);
           print_r($arr);
	   $unique=array_unique($arr);
	   print_r($unique);
	   echo implode("",$unique);
?>



Result:

9
3
payilagam
PAYILAGAM
7af8adca03aa44ffee596c238221e9460cf85874
la3773ritvifE
998bda833235229c07fccca9c6efe034
Chennai
yilagam
yilaga
Pxyzagam
amialayPg
Array ( [0] => Hi [1] => dear [2] => friend ) 
ignes
