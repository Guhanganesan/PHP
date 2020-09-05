<style>
*{color:red;}
h2{color:blue;}

</style>
<h2>Array</h2>
<?php
		$arr = array(1,2,3,4);
		print_r($arr);

		$arr[0] = 10;
		$arr[1] = 20;
		$arr[2] = 30;

		print_r($arr);
?>

<h2>Indexed Array</h2>
<?php
     $x= array(10,30,20,50);
     for($i=0;$i<4;$i++)
     {
         echo "$x[$i]"."<br>";
     }
?>
<br><br> Using for each<br><br>
<?php
      $x= array(10,30,20,50);
     
      foreach($x as $y)
      {
          echo $y."<br>";
      }
?>
<h2>Associative Array</h2>
We are using key for instead of using indexed value
<br>
<?php
     $x=array("name"=>"Guhan", "Age"=>27,"mob"=>9791, "email"=>"guhan@gmail.com");
     echo $x['name']."<br>";
     print_r($x); // It gives index with values(readable information)
     echo "<br>";
     var_dump($x);// how many elements, data types and its length
?>
<h2>Using for each</h2>
<?php
      $x=array("name"=>"Guhan", "Age"=>27,"mob"=>9791, "email"=>"guhan@gmail.com");
     
      foreach($x as $y)
      {
          echo $y."<br>"; //prints value only
          
      }
	  	  
      foreach(array_keys($x) as $paramName)
      echo $paramName . "<br>";
?>
<h2>Multi dimensional Array</h2>
<?php
      $x=array(array("name"=>"anbu", "mob"=>9566, "sal"=>20000),
               array("name"=>"suresh", "mob"=>9876, "sal"=>22000),
               array("name"=>"ravi","mob"=>7865, "sal"=>23000)
            );
            
            print_r($x);
            
?>

Using for loop<br>

<?php
         $x=array(array("name"=>"anbu", "mob"=>9566, "sal"=>20000),
               array("name"=>"suresh", "mob"=>9876, "sal"=>22000),
               array("name"=>"ravi","mob"=>7865, "sal"=>23000)
            );
      
	  // echo $x[0]['name'];
      
      foreach($x as $y)
      {
           foreach($y as $z)
           {
               echo $z."<br>";
           }
      }
?>
<h2>Sorting Arrays</h2>

<h2>Sort</h2>
<?php
     	$x=array("S","M","A","Z","P","K");
     	sort($x);
     	print_r($x);
	echo "<br>";
	echo $x[0]."<br>";
     	echo $x[3]."<br>";
?>
<h2>Reverse</h2>
<?php
     	$x=array("S","M","A","Z","P","K");
     	rsort($x);
     	print_r($x);
  	echo $x[0]."<br>";
     	echo $x[3]."<br>";
     
?>
<h2>Ascending Order by values</h2>
<?php
     $x=array("S"=>20,"M"=>10,"A"=>15,"Z"=>5,"P"=>30,"K"=>25);
     asort($x);
     print_r($x);
     
?>
<h2>Descending Order by values</h2>
<?php
     $x=array("S"=>20,"M"=>10,"A"=>15,"Z"=>5,"P"=>30,"K"=>25);
     arsort($x);
     print_r($x);
     
?>
<h2>Ascending Order by key</h2>
<?php
     $x=array("S"=>20,"M"=>10,"A"=>15,"Z"=>5,"P"=>30,"K"=>25);
     ksort($x);
     print_r($x);
?>
<h2>Descending Order by key</h2>
<?php
     $x=array("S"=>20,"M"=>10,"A"=>15,"Z"=>5,"P"=>30,"K"=>25);
     krsort($x);
     print_r($x);
?>
<h2>Array Length</h2>
<?php
     $x=array("S"=>20,"M"=>10,"A"=>15,"Z"=>5,"P"=>30,"K"=>25);
     echo count($x);
?>
<h2>Array Combine</h2>
<?php
     $x=array("S","M","A","Z","P","K");
     $y=array(10,20,30,40,50,60);
     $z=array_combine($x,$y);//combines key value pair
     print_r($z);
    
?>

<h2>Array reverse</h2>
<?php
	// reverse by key
	$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
	print_r(array_reverse($a));
?> 

<h2>Array search</h2>
<?php
	$a=array("a"=>"red","b"=>"green","c"=>"blue");
	echo array_search("red",$a);
?> 

<h2>Array Fill</h2>
<?php
     	$z=array_fill(5,4,"D");// parameter 1 and 2 should be an integer, strat from //[5] and fill 4 elements
     	print_r($z);
?>
<h2>Array Shuffle</h2>
<?php
     	$x=array("A","B","C","D","E");
     	shuffle($x);
     	print_r($x);
?>
<h2>Array Push</h2>
<?php
    	 //insert into last sides
    	 $x=array("A","B","C","D","E");
     	 array_push($x,"F","G");
     	 print_r($x);
?>
<h2>Array Pop</h2>
<?php
	//Remove from last sides
	$a=array("red","green","blue");
	array_pop($a);
	print_r($a);
?> 
<h2>Array Shift</h2>

<?php
	// Remove from first
	$a=array("red","green","blue");
	array_shift($a);
	print_r($a);
?> 
<h2>Array Unshift</h2>
<?php
	// add elements into first sides
	$a=array("red","green","blue");
	array_unshift($a, "orange","black");
	print_r($a);
?>

<h2>Array Slice</h2>
<?php
	$a=array("red","green","blue");
	$a=array_slice($a,0,2);       //Array ( [0] => red [1] => green )
	print_r($a);
?> 
<h2>Array Unique</h2>
<?php
	$a=array("red","green","blue","blue","red");
	$a=array_unique($a);
	print_r($a);
?> 
<h2> array map</h2>
<?php
	function myfunction($v)
	{
	  return($v*$v);
	}

	$a=array(1,2,3,4,5);
	print_r(array_map("myfunction",$a));
	/* Example for C
	#include <stdio.h>
	void display(int age)
	{
	    printf("%d", age);
	}

	int main()
	{
	    int ageArray[] = { 2, 3, 4 };
	    display(ageArray[2]); //Passing array element ageArray[2] only.
	    return 0;
	}

	*/
?> 
<h2> array merge</h2>
<?php
	$a1=array("red","green");
	$a2=array("blue","yellow");
	print_r(array_merge($a1,$a2));
	//Array ( [0] => red [1] => green [2] => blue [3] => yellow )
?> 

<h2> array_multisort</h2>
<?php
	$a=array("Dog","Cat","Horse","Bear","Zebra");
	array_multisort($a);
	print_r($a);
	//Array ( [0] => Bear [1] => Cat [2] => Dog [3] => Horse [4] => Zebra )
?> 
<br><br>
<?php
	//Sort more than one array
	$ar1 = array(10, 100, 100, 0);
	$ar2 = array(1, 3, 2, 4);
	array_multisort($ar2, $ar1);
	print_r($ar2);
	print_r($ar1);
	//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) Array ( [0] => 10 [1] => 100 [2] => 100 [3] => 0 )
?>
<h2>Array_product</h2>
<?php
	$a=array(5,5);
	echo(array_product($a));
?> 
<h2>Array random</h2>
<?php
	$a=array("red","green","blue","yellow","brown");
	$r=array_rand($a,3);
	echo $a[$r[0]]."<br>";
	echo $a[$r[1]]."<br>";
	echo $a[$r[2]];
?> 
<h2>Array replace</h2>
<?php
	$a1=array("red","green");
	$a2=array("blue","yellow");
	print_r(array_replace($a1,$a2));
	//Array ( [0] => blue [1] => yellow )
?> 

<h2>Array replace</h2>
<?php
	$base = array("orange", "banana", "apple", "raspberry");
	$replacements = array(0 => "pineapple", 4 => "cherry",2=>"mango");

	$basket = array_replace($base, $replacements);
	print_r($basket);

	//Array ( [0] => pineapple [1] => banana [2] => mango [3] => raspberry [4] => cherry )

?>

---------------------------------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------

Result:-

Array
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 4 )
Indexed Array
10
30
20
50

Using for each
10
30
20
50
Associative Array
We are using key for instead of using indexed value 
Guhan
Array ( [name] => Guhan [Age] => 27 [mob] => 9791 [email] => guhan@gmail.com ) 
array(4) { ["name"]=> string(5) "Guhan" ["Age"]=> int(27) ["mob"]=> int(9791) ["email"]=> string(15) "guhan@gmail.com" }
Using for each
Guhan
27
9791
guhan@gmail.com
name
Age
mob
email
Multi dimensional Array
Array ( [0] => Array ( [name] => anbu [mob] => 9566 [sal] => 20000 ) [1] => Array ( [name] => suresh [mob] => 9876 [sal] => 22000 ) [2] => Array ( [name] => ravi [mob] => 7865 [sal] => 23000 ) ) Using for loop
anbu
9566
20000
suresh
9876
22000
ravi
7865
23000
Sorting Arrays
Sort
Array ( [0] => A [1] => K [2] => M [3] => P [4] => S [5] => Z ) 
A
P
Reverse
Array ( [0] => Z [1] => S [2] => P [3] => M [4] => K [5] => A ) Z
M
Ascending Order by values
Array ( [Z] => 5 [M] => 10 [A] => 15 [S] => 20 [K] => 25 [P] => 30 )
Descending Order by values
Array ( [P] => 30 [K] => 25 [S] => 20 [A] => 15 [M] => 10 [Z] => 5 )
Ascending Order by key
Array ( [A] => 15 [K] => 25 [M] => 10 [P] => 30 [S] => 20 [Z] => 5 )
Descending Order by key
Array ( [Z] => 5 [S] => 20 [P] => 30 [M] => 10 [K] => 25 [A] => 15 )
Array Length
6
Array Combine
Array ( [S] => 10 [M] => 20 [A] => 30 [Z] => 40 [P] => 50 [K] => 60 )
Array reverse
Array ( [c] => Toyota [b] => BMW [a] => Volvo )
Array search
a
Array Fill
Array ( [5] => D [6] => D [7] => D [8] => D )
Array Shuffle
Array ( [0] => C [1] => D [2] => B [3] => A [4] => E )
Array Push
Array ( [0] => A [1] => B [2] => C [3] => D [4] => E [5] => F [6] => G )
Array Pop
Array ( [0] => red [1] => green )
Array Shift
Array ( [0] => green [1] => blue )
Array Unshift
Array ( [0] => orange [1] => black [2] => red [3] => green [4] => blue )
Array Slice
Array ( [0] => red [1] => green )
Array Unique
Array ( [0] => red [1] => green [2] => blue )
array map
Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
array merge
Array ( [0] => red [1] => green [2] => blue [3] => yellow )
array_multisort
Array ( [0] => Bear [1] => Cat [2] => Dog [3] => Horse [4] => Zebra ) 

Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 ) Array ( [0] => 10 [1] => 100 [2] => 100 [3] => 0 )
Array_product
25
Array random
green
blue
yellow
Array replace
Array ( [0] => blue [1] => yellow )
Array replace
Array ( [0] => pineapple [1] => banana [2] => mango [3] => raspberry [4] => cherry )
