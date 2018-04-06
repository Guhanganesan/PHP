<h2>Array</h2>
<?php
$digits = array();
$digits[0] = 1;
$digits[1] = 2;
$digits[2] = 3;
$arraypad = array_pad($digits, -4, "0");
print_r($arraypad);

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
     print_r($x);// It gives index with values(readable information)
     echo "<br>";
     var_dump($x);// how many elements, data types and its length
?>
<h2>Using for each</h2>
<?php
      $x=array("name"=>"Guhan", "Age"=>27,"mob"=>9791, "email"=>"guhan@gmail.com");
     
      foreach($x as $y)
      {
          echo $y."<br>";
          
      }
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
     $z=array_combine($x,$y);
     print_r($z);
    
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
<h2>Array_pad </h2>
<?php
$a=array("red","green");
print_r(array_pad($a,3,"blue"));
//inserts a specified number of elements, with a specified value, to an array.
?> 
<h2>Array Slice</h2>
<?php
$a=array("red","green","blue");
$a=array_slice($a,-2,1);
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
/*
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
?> 

<h2> array_multisort</h2>
<?php
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
?> 
<br><br>
<?php
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar2, $ar1);
print_r($ar2);
print_r($ar1);

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
?> 

<h2>Array replace</h2>
<?php
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
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
<h2>Array shift</h2>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");

echo array_shift($a);
echo "<br>";
print_r ($a);
?> 
<h2>Array slice</h2>
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,3));
?> 
<h2>Array splice</h2>
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,1,2,$a2);
print_r($a1);
?> 

<h2>Array unique</h2>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
// Remove duplicate 
?> 

<h2>Array unshift</h2>
<?php
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
//inserts new elements to an array.
?> 












































