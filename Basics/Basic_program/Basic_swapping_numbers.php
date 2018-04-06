<?php
$x="guhan";//10
$y="anbu";//20
$z=$x;
$x=$y;
$y=$z;
echo "<br>value of x is: $x";
echo "<br> value of y is: $y";

?>
<br>
<br>


<?php
      $a= 10;
	  $b= 5;
	  
	  $a=$a+$b; // $a= 15;
	  
	  $b=$a-$b; // $b=5;
	  	  
	  $a=$a-$b; // $a=10;
	  
	  echo "$a<br>";
	  echo "$b<br>";
?>

<h2> Reverse</h2>
<?php
$m = 1234;   $r=0;
for($i=0; $i<3; $i++)
{ 
    $r=$m%10;
	echo $r;
	$m = $m/10;
}
$m=$m%10;
echo $m;
?>


<h2> Star</h2>
<?php
$s=0;
for($i=5; $i>=1; $i--)         
{
	for($j=1; $j<=$s; $j++)
	{
		echo "&nbsp;&nbsp;";
	}
	for($j=1; $j<=$i; $j++)
	{
		echo"*";
	}
	echo"<br>";
	$s++;
}	
?>





<h2> Factorial</h2>


<?php
      $x= 5;
	  
	  for($i=4; $i>0; $i--)
	  {
		  $x=$x*$i;
	  }
	  echo $x;

	  
?>


<h2> Reverse String</h2>


<?php
      $x= "Guhan";
	  $m= strlen($x);
	  for($i=$m-1; $i>-1; $i--)
	  {
	  echo $x[$i];
	  }
?>

<h2> Palindrome of a String</h2>


<?php
      $x= "AMMA";
   	  $n="";
	  $m= strlen($x);
	  for($i=$m-1; $i>-1; $i--)
	  {
	        $n=$n.$x[$i];
			
	  }
	  echo $n;	
	  if($x==$n)
	  {
		  echo "Given String is Palindrome";
	  }

?>






