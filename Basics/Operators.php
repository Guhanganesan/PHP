PHP is a recursive acronym for PHP: Hypertext Preprocessor, a scripting language used to create dynamic and interactive HTML Web pages.
A server processes PHP commands when a website visitor opens a page, then sends results to the visitor’s browser.


Hypertext refers to a word, phrase or chunk of text that can be linked to another document or text. 
Hypertext covers both textual hyperlinks and graphical ones. 
The term was coined by Ted Nelson in the 1960s and is one of the key concepts that makes the Internet work. 
Without hypertext, following a link on a topic to a related article on that topic – one of the primary means of navigating the 
Web – would be impossible.


The concept of hypertext was central to the creation of the World Wide Web. Through the use of textual links, 
Web pages written in HyperText Markup Language (HTML) can be linked and cross-referenced throughout the Web. 
Ted Nelson actually had a far grander vision for hypertext than Tim Berners-Lee’s World Wide Web, but his project, 
Xanadu is still under development many decades later.





------------------------Variable and Operators --------------

<h2> Print and Printf</h2>

	<?php
	$String = "Hi Guhan";
	printf('%s', $String);
	?>


<h2> Sscanf() </h2>

	<?php
	$x = "age:20";
	sscanf($x,"age:%d", $age);
	var_dump($age); // value and datatype
	print($age);
	/* The C library function int sscanf(const char *str, const char *format, ...) 
	reads formatted input from a string. */
	?>

<h2> Sprintf() </h2>

	<?php
	$x = 100;
	$y = "Guhan";
	$check = sprintf("%s has %u books",$y,$x);
	echo $check;
	?> 


<h2>Comments</h2>

	<?php
	// echo "";
	/* echo "";*/
	# echo "";
	?>

<h2> Case Sensitive </h2>

  /*A case-sensitive program that expects you to enter all commands in uppercase will not respond correctly 
   if you enter one or more characters in lowercase. It will treat the command RUN differently from run. 
   Programs that do not distinguish between uppercase and lowercase are said to be case-insensitive. */

	<?php
	echo "hi";
	echo "<br>";
	ECHO "ALL KEYWORDS ARE NOT CASE SENSITIVE";
	?>

<h2> Special Variables </h2>

	<?php 
	ecHo $_SERVER['PHP_SELF'];
	echo "<br>";//Returns the filename of the currently executing script.
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";//
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";//
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	echo $_SERVER['REMOTE_PORT'];
	echo "<br>";
	echo $_SERVER['SERVER_PORT'];
	echo "<br>";
	?>
<h2> Bitwise Operator </h2>

	<?php
	echo 14&4;
	echo "<br>";
	echo 14 | 4;
	echo "<br>";
	echo 14^4;
	echo "<br>";
	echo ~14;
	echo "<br>";
	echo 3<<2;
	echo "<br>";
	echo 8>>2;
	?>

-------------------------------------------------------------------------------------------------------------------

<h2> Check Data Type1 </h2>
      
       <?php
		$a=0.24;
		$b=2.4;
		$c="guhan";
		$d=array(1,2,3);
		var_dump($a); //float(0.24)
		var_dump($b); //float(2.4)
		var_dump($c); //string(5) "guhan" 
		var_dump($d); //array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
	?>
--------------------------------------------------------------------------------------------------------------------
<h2> Check Data Type2 </h2>

	<?php  // Check datatype
	$a=0.24;
	$b=2.4;
	$c="guhan";
	$d=array(1,2,3);
	if(is_int($a))
	{
		echo "Integer<br>";
	}
	else
	{
		echo "Not Integer<br>";
	}
	if(is_float($b))
	{
		echo "float<br>";
	}

	if(is_string($c))
	{
		echo "string<br>";
	}
------------------------------------------------------------------------------------------------------------------------ 

	<h2> Check Data Type3 </h2>
	<?php
		$a=0.24;
		$b=2.4;
		$c="guhan";
		$d=array(1,2,3);
		echo gettype($a); //double 
		echo gettype($b); // double
		echo gettype($c); // string
		echo gettype($d); //array
	?>
	<?php
		$a=2.4;
		$m=(int)$a;
		print($m);//0 for $a=0.24;  2 for 2.4
		$s=(string)$a;
		print($s); // 2.4
	?>
	<?php
		$var = "30";
		echo "The current datatype of var is: " . gettype($var) . "<br><br>";
		$var = (int)$var;
		echo "The current datatype of var is: " . gettype($var);
		echo "<br>";
	?>				

-----------------------------------------------------------------------------------------------------------------------
		<h2> Round Ceil Floor </h2>
		<?php
			$m=10;
			$n=3;
			$s=$m/$n;
			echo round($s,3);
		?>				
                <?php
			echo ceil(4.3);    // 5
			echo ceil(9.999);  // 10
			echo ceil(-3.14);  // -3
		?>
                <?php
			echo round(3.4);         // 3
			echo round(3.5);         // 4
			echo round(3.6);         // 4
			echo round(3.6, 0);      // 4
			echo round(1.95583, 2);  // 1.96
			echo round(1241757, -3); // 1242000
			echo round(5.045, 2);    // 5.05
			echo round(5.055, 2);    // 5.06
		?>
------------------------------------------------------------------------------------------------------------------------

<h2>Special Characters</h2>
			<?php
			$x=10;
			EcHo "\$x is \ 10?"; // back slash
			echo "<br>";
			echo "Now this is $x";
			echo "<br>";
			echo "\'$x\'";
			?>
-----------------------------------------------------------------------------------------------------------------------


<h2>Constants</h2>

<?php
      $x=40;
      define('x',10);
      echo $x."<br>";
      echo x."<br>";
      define('x', 20);
      echo x."<br>";
	  $x=30;
	  echo $x."<br>";
	  static $m=20;
	  echo $m."<br>";
	  static $m=50;
	  echo $m."<br>";
	  /*
      define('z',$x+y);
      echo z."<br>";
	  */
?> 
<h2>Functions</h2>
<?php
      $x="Nila";// global
      function run()
      {
          global $x; // make into local
          $y="is";
          $z=$x." ".$y."Moving!!!";
          echo $z;
      }
	  run();
	  
?>
<?php
     $x=10; // Global Variables
     $y=20;
     $z="";
     function add()
     {    
         $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y']."<br>"; //local 
         
     }
     function mult()
     {   
         global $x, $y,$z;
         
         //$GLOBALS['z']=$GLOBALS['x']*$GLOBALS['y'];
         $z=$x*$y;
         echo $z;
         
     }
    add();
    echo $z;
    mult();
   // echo $z;
?>

<?php
    
    function calc($x=70,$y)
      {
          $z=$x+$y;
          echo $z;
      }
      calc(40,30);
?>
<h2>Heredoc</h2>
<?php
    $y="Anbu";
    $x=<<<m
Guhan&nbsp&nbsp$y
m;
     echo $x;
/*	 
$sql =<<<SQL // useful for multi-line strings and avoiding quoting issues.
select *
from $tablename
where id in [$order_ids_list]
and product_name = "widgets"
SQL;
*/	 
?>

<h2>Data types</h2>
<?php
$x = 100;  
$y = "101";
if($x == $y)// value
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
$x = 100;  
$y = 101;
if($x === $y) // datatype with memory 
{
     echo "True";
}
else
{
    echo "False";
}
?> 
<?php
    
$x = "100";  
$y = "100";

if($x === $y)
{
     echo "True";
}
else
{
    echo "False";
}
?> 
<br/>
<br>
<h2> Increment or decrement </h2>
<?php
       $x=10;
	  //$x++;
	  echo $x++."<br>";
	  //++$x;
	 // echo $x."<br>";
	 //	 $x++;
	  echo $x."<br>";
      echo ++$x;
            
          //    11, 11, 12
          
            /*
            y = ++x; // y==4, x==4
            y = x++; // y==3, x==4
            */

?>  
<?php
      for($i=0;$i<=10;$i++)
      {
          echo $i;
          while($i==5)
          {
              echo "This is 5";
              //continue; 
              break;
          }
      }
?>
<br><br>
<?php
      /* The do while loop executes the content of the loop once before checking the condition of the while.

Whereas a while loop will check the condition first before executing the content.

In this case you are waiting for user input with scanf(), which will never execute in the while loop as wdlen is not initialized and may just contain a garbage value which may be greater than 2.


*/


      for($i=0;$i<=10;$i++)
      {
           echo $i;
          if($i==5)
          {
              echo "This is 5";
          }
      }
?>

<h2> While and Do while </h2>


<?php
/* example 1 */

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}

/* example 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>

<h2> Do While</h2>

<?php
$i = 0;
do {
	$i++;
    echo $i;
	//break;
} 
while ($i <5);
?>


<h2> Switch Case </h2>

<?php
     $x="Guhan";
	 switch($x)
	 {
		 case "Anbu":
		 echo "Hi how are you";
		 break;
		 case "Raja":
		 echo "Hello Friend";
		 break;
		 default:
		 echo "Chennai";
		 break;
	 }

?>
