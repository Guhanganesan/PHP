<?php 
$x = 1000; 
$y = 2000;
 
function addition() { 
   
	global $x;
	global $y;
	return $x+$y;
	
	//$s=$GLOBALS['x'];
	//$t=$GLOBALS['y'];
	
	//return $s+$t;
}
 
$m=addition(); 

echo $m;


?>
<br><br>




<?php 
echo $_SERVER['PHP_SELF'];  // it runs in the current file Ex. <form action="<?php echo $_SERVER['PHP_SELF']"> 
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];   // identifies the address of the webpage
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL']; //HTTP 1.1 is the latest version of Hypertext Transfer Protocol (HTTP), 
  //the World Wide Web application protocol that runs on top of the Internet's TCP/IP suite of protocols.
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
?>









