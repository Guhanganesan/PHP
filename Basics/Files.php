<?php // File Creation
      $n="Guhan.txt";
      
      $c= fopen($n,"w");
      
      if($c)
      {
          echo "New file is created successfully";
      }
      
      fclose($n);
?>
<?php  // File write
       $m= fopen("Guhan.txt", "w");
       $w= fwrite($m, "This is my text");
       if($w)
       {
           echo "New data is edited";
       }
       fclose($w);
?>
<?php // File Read
      $m=fopen("Guhan.txt", "r");
      $r=fread($m, 10);
      if($r)
      {
          echo $r;
      }
      fclose($r);
?>
<?php // File Erase
     $n = fopen("Guhan.txt", "w+");
       if($n)
       {
           echo "text is erased";
       }
     fclose();
?>
<?php // File Append
$myFile = "Guhan.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "My new line1\n";
fwrite($fh, $stringData);
$stringData = "My new line2\n";
fwrite($fh, $stringData);
fclose($fh);
?>
<?php // File gets
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
/*If you had separated your data with new lines then 
you could read in one segment of data at a time with the gets function.
Ex. Guhan
    madhan, here two separated lines are there, so it reads only a first line*/
fclose($fh);
echo $theData;
?>

<?php
$myFile = "testFile.txt";
unlink($myFile);
?>

<?php
// it erase all the data from your file
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w');
fclose($fh);
?>

<?php
$number1 = 20;
echo $number1;
echo "<br>";
include("print.php");
/*he include (or require) statement takes all 
the text/code/markup that exists in the specified 
file and copies it into the file that uses the include statement.
--> include will only produce a warning (E_WARNING) and the script will continue
*/
require("print1.php");
?>

<?php include 'String.php';

?>

<?php require 'String.php';
echo "<br>Payilagam";
?>
<?php
include 'test.txt';  
?>
