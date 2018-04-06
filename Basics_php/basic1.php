<?PHP
echo "hi";
echo "<br>";
ECHO "ALL KEYWORDS ARE NOT CASE SENSITIVE";
?>

<br>
<?php
echo 'How are you';
?>

<h2>Special Characters
</h2>

<?php
$x=10;
echo "\$x is \ 10?"; // back slash
echo "<br>";
echo "Now this is $x";
echo "<br>";
echo "\'$x\'";
?>

<h2>Comments</h2>

<?php
// echo "";
/* echo "";*/
# echo "";
echo "There are examples of comments in php";
?>

<h2>Constants</h2>

<?php
      $x=40;
      define('x',10);
      echo $x."<br>";
      echo x."<br>";
      define('y', 20);
      echo y."<br>";
      define('z',$x+y);
      echo z."<br>";
?> 

<h2>Variables</h2>

<?php
     $x=10;
     $y=20;
     $z="";
     function add()
     {    
         $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
         
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

<br><br>


<?php
      run();
      function run()
      {
          $x="Nila";
          $y="is";
          $z=$x.$y."Moving!!!";
          echo $z;
      }
      

?>

<br><br>


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
?>

<h2>Data types</h2>

<?php
    
$x = 100;  
$y = "100";

if($x == $y)
{
     echo "True";
}
else
{
    echo "False";
}
?>  

<?php
    
$x = 100;  
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
<br>
<br>
<?php
            $x = 10;  
            $y=++$x;
            
            echo $y;
            
            $a=$y++;
            
            echo $a;
            echo "<br>";
            echo $y;
            
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
      for($i=0;$i<=10;$i++)
      {
           echo $i;
          if($i==5)
          {
              echo "This is 5";
          }
          
          
      }

?>

















      










