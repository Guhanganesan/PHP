<?php
function f1() 
{
  function f2() 
  {
    echo "Welcome";
  }
}
f1();
f2();
?>
<br><br>
<?php
function f3($s)
{
	$s = 'Welcome';
	echo $s."<br>";
}
$s = 'Hi';
f3($s);
//f1($s) --> Fatal error: Cannot redeclare f1() 
echo $s;    
?>
<br><br>
<h2> Null</h2>
<?php
     function myFunction()
	 {
		 $n=null;
		 $m=100;
		 $n=$m;
		 echo $n;
	 }
     myFunction();
?>
<br><br>
<?php
function f4($s)
{
    $s = 'Welcome';
	echo $s;
}
$s = null;
f4($s);
echo $s;    
echo "null";
?>
<br><br>ex:
        <?php
        function calc($price, $tax="")
        {
            $total = $price + ($price * $tax);
            echo "$total"; 
        }
        calc(42);	
        ?>





