<h2> Array</h2>
<?php
     $a= array();
	// echo $a;
	 $a[0]="Guhan";
	 $a[1]="Anbu";
	 print_r($a);
	 var_dump($a);
?>
<h2> Array in for loop</h2>

<?php
     $a=array("Guhan","Anbu","Rajesh");
	 $c=count($a);
	 //echo $c;
	 for($c=2;$c>-1;$c--)
	 {
		 echo $a[$c]."<br>";
	 }
?>
<h2> For each </h2>

<?php
     $a=array("Guhan","Anbu","Rajesh");
	 foreach($a as $key)
	 {
		 echo $key."<br>";
	 }
?>
<h2> Associative Array</h2>

<?php
     $a = array("name"=>"Guhan","mob"=>7587,"area"=>"chennai");
	 //echo $a["name"];
	 foreach($a as $key)
	 {
		 echo $key."<br>";
	 }
?>

<h2> Multi dimensional array</h2>

<?php
$a = array(array("name"=>"guhan","mob"=>9791),
           array("name"=>"raja","mob"=>6586),
		   array("age"=>25,"sal"=>20000));
	//echo $a[0]["name"];
	foreach($a as $key)
	{
		foreach($key as $z)
		{
			echo $z;
			if($z==9791)
			{
				echo "<br>";
			}
			if($z==6586)
			{
				echo "<br>";
			}
		}
	}

?>

<h2> Sorting an array</h2>
<?php
      $a=array("Guhan","Anbu","Raja","Vimal");
	  sort($a);
	  print_r($a);
?>
<br><br>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  sort($a);
	  print_r($a);
?>
<br><br>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  asort($a);
	  print_r($a);
?>
<br><br>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  arsort($a);
	  print_r($a);
?>
<br><br>
<?php
      $a=array("z"=>-2,"n"=>4,"b"=>-1,"c"=>3,"a"=>0,
	  "d"=>-5,"f"=>6);
	  ksort($a);
	  print_r($a);
?>
<br><br>

<?php
      $a=array("z"=>-2,"n"=>4,"b"=>-1,"c"=>3,"a"=>0,
	  "d"=>-5,"f"=>6);
	  krsort($a);
	  print_r($a);
?>
<br><br>

<h2> Array Push</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  array_push($a,7,-7);
	  print_r($a);
?>

<h2> Array Pop</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  array_pop($a);
	  print_r($a);
?>

<h2> Array Shift</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  array_shift($a);
	  print_r($a);
?>

<h2> Array unshift</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  array_unshift($a,-3,5);
	  print_r($a);
?>

<h2> Array Slice</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  $s=array_slice($a,-2,2);
	  print_r($s);
?>

<h2> Array Splice</h2>
<?php
      $a=array(-2,4,-1,3,0,-5,6);
	  array_splice($a,2,3);
	  //start in $a[2] and removes 3 elements
	  print_r($a);
?>

<h2> Insert elements</h2>
<?php
     $original = array( 'a', 'b', 'c', 'd', 'e' );
     $inserted = array( 'x','y' ); 
     array_splice( $original, 1, 2, $inserted );
	 print_r($original);
?>





