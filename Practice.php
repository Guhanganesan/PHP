PHP INTERVIEW EXERCISE
1) <?php if ($x == 1)
 { echo 'Hollo Friends!'; }
 else 
{echo 'How are you!!';}?>
Output:
Notice: Undefined variable: x
How are you!!
____________________________________________
2) <?php
$x = 'Payilagam';
echo 'The variable \$x contains
 \' $x \' \" \\';   ?>
Ouput:
The variable \$x contains ' $x ' \" \
____________________________________________
3) <?php
define('name', 'anbu', true);
echo NAME;
echo name; ?>
Output:
anbuanbu
____________________________________________
4) <?php
run(); if (10==10){ function run(){
 echo 'Welocome!'; } }     ?>
Output:
Fatal error: Call to undefined function run() 
____________________________________________
5) <?php if (0==0){function run()
{ echo 'Welcome';    }    }
run();    go();     function go(){
 echo 'Come'; }?>
6) <?php function run($a, $b){
 echo "a = $a, b = $b";}
run(10,20); ?>
Output:
WelcomeCome

7) <?php
function Add($one,$two){
 $total = $one + $two;
 return $total; }
 echo Add(4,4);  ?>
Output:
8
___________________________________________
8) <?php
$y = 'Alagar5+5'; 
$z = "\$evaly = \" $y \" ;";
eval($z); 
echo $evaly; ?>
Output:
Alagar5+5
-------------------------------------------------
9) <?php $str = <<<Sample
this is a sample string
A sample string
Sample;
Echo $str; ?>
Output:
this is a sample string A sample string
------------------------------------------------
10) <?php   $x = 0;
  while ($x <= 3){
  echo "$x, ";
  $x++;  } ?>
Output:
0, 1, 2, 3,
------------------------------------------------
11) <?php
$boolean = TRUE; 
$result = ($boolean) ? 'Is True' : 'Is False'; 
echo $result; ?>
Output:
Is True
-----------------------------------------------------------
12) <?php    $a = 1;       $b = TRUE; 
if ($a == $b){  echo 'a is equal to b.';  }
if ($a === $b){  echo 'a is identical and equal to b.'; }?>
Output:  a is equal to b.

13)  <?php $a = 1; if (!isset($a))
{    echo '$a is not set';  }
if ($a != 0)
{  echo '$a does not equal zero';} ?>
Output:
$a does not equal zero
-----------------------------------------------------------
14) <?php
$x = array( 1 => 'Anbum' );
$y = 'Aranum';
echo 'This is:' . $x[1]."&nbsp;" . "$y";  ?>
Output:
This is:Anbum Aranum
-----------------------------------------------------------
15) <?php
if (1 == 1 && 2 == 2){
 echo 'Output1'; }
if(1==1 || 1!=2)
{  echo 'Output2'; }
if(1==1 && 1!=1)
{    echo 'Output3'; }?>
Output:
Output1Output2
-----------------------------------------------------------
16) <?php  $x = 1;
if ($x < 1){ echo 'Output1'; }
elseif ($x == 1){  echo 'Output2'; }
else { echo 'Output3';}    ?>
Output:
Output2
-----------------------------------------------------------
17) <?php   $x = 1;   switch ($x) {
 case 1:     echo '1';
 case 2:     echo '2';   }    ?>
Output:
12
----------------------------------------------------------
18) <?php   $x = 10;    switch ($x) {
 case '12': echo 'Output1';    break;
 default: echo 'Output2';      break;
 case '11': echo 'Output3';    break;    }    ?>
Output:
Output2
-----------------------------------------------------------
19) <?php for ($v=0;$v<=10;$v++){
 echo $v;
 if ($v == 5){   continue;   }
 if ($v == 8){   break;    }   echo ',';   }  ?>
Output:
0,1,2,3,4,56,7,8
-----------------------------------------------------------
20) <?php
$a = array('Anbu' => 20, 'Ragu' => 24);
foreach ($a as $m => $n){  echo "$m - $n";
 echo '<br>';}?>
Output:
Anbu - 20
Ragu - 24
----------------------------------------------------------
21) <?php  $x=0;   while(1==1){
 while(0==0){    $x++;     echo $x;
break 2; }   }   ?>
Output:
1
----------------------------------------------------------
22) <?php for ($x=1;$x<=10;$x++)
{  if ($x == 5){  continue;   } 
 echo $x;    }   ?>
Output:
1234678910
-----------------------------------------------------------
23) <?php
$x = '';   $y = 0;    $z = NULL;
var_dump( is_null($x), is_null($y), is_null($z) );?>
Output:
bool(false) bool(false) bool(true)
-----------------------------------------------------------
24) <?php   $x = 'Payilagam';
var_dump( isset($x) );    echo '<br>'; 
unset($x);    var_dump( isset($x) );   ?>
Output:
bool(true) 
bool(false)
-----------------------------------------------------------
25) <?php
$x = array();
$y = array( 'A', 'B', 'C' );
var_dump( is_array($x), is_array($y) ); ?>
Output:
bool(true) bool(true)
-----------------------------------------------------------
26) <?php
$x = 0;        $y= '0';
var_dump( is_int($x), is_int($y) );?>
Output:
bool(true) bool(false)
---------------------------------------------------
27) <?php
$x = 0;
$y = '0';
var_dump( is_string($x), is_string($y) );  ?>
Output:
bool(false) bool(true)
---------------------------------------------------
28) <?php   $x = 10;      $y = '10';
var_dump( is_numeric($x), is_numeric($y) );
?>
Output:
bool(true) bool(true)
-----------------------------------------------------------
29) <?php
$x = 10;    $y = 'Guhan';
$z = array( 'Anbu' );
var_dump( $x, $y, $z, is_string($y) );   ?>
Output:
int(10) string(5) "Guhan" array(1) { [0]=> string(4) "Anbu" } bool(true)
-----------------------------------------------------------
30) <?php
$x = array( 'A', 'B', 'C' );
print_r($x); ?>
Output:
Array ( [0] => A [1] => B [2] => C )
-----------------------------------------------------------
31) <?php   $x = array( 'AA', 'BCD', 'CAB' );
$O = serialize($x);
echo $O;?>
Output:
a:3:{i:0;s:2:"AA";i:1;s:3:"BCD";i:2;s:3:"CAB";}
-----------------------------------------------------------
32) <?php $r = 45.67;    $s = "145the words";
$t = "0025";
var_dump ( floatval($r), floatval($s), floatval($t) );?>
Output:
float(45.67) float(145) float(25)
-----------------------------------------------------------
33) <?php   $s = ' He said, "He is clever!"';
$s = addslashes($s); echo $s;
$s = stripslashes($s);   echo $s;   ?>
Output:
He said, \"He is clever!\" He said, "He is clever!"
-----------------------------------------------------------
34) <?php   $s = 'Vaanavil Alagu!';  
$s = chunk_split($s, 3);
var_dump($s);   echo nl2br($s); 
echo 'I am on a new line?';      ?>
Output:
string(25) "Vaa nav il Ala gu! " Vaa
nav
il 
Ala
gu!
I am on a new line?
-----------------------------------------------------------
35) <?php
$s = 'Mazhai Kaalam!';
$s = chunk_split($s, 3);
echo '<pre>';    echo $s;     
echo '</pre>';      ?>
Output:
Maz
hai
 Ka
ala
m!
----------------------------------------------------------
36) <?php
$x = 'He is my dear friend!!';
$s = wordwrap($x, 8);
echo nl2br($s);      ?>
Output:
He is my
dear
friend!!
-----------------------------------------------------------
37) <?php
$s = 'Payilagam';
$array = count_chars($s, 1);
print_r($array);  ?>
Output:
Array ( [80] => 1 [97] => 3 [103] => 1 [105] => 1 [108] => 1 [109] => 1 [121] => 1 )

38) <?php  $s = 'Payilagam';
$array = count_chars($s, 1);
foreach ($array as $key => $value){
 $char = chr($key);   $chararray[$char] = $value;
}     print_r($chararray);     ?>
Output:
Array ( [P] => 1 [a] => 3 [g] => 1 [i] => 1 [l] => 1 [m] => 1 [y] => 1 )
-----------------------------------------------------------
39) <?php   $x = '02-01-1980';
$y = explode('-', $x); 
echo '<pre>';    
print_r($y);    ?>
Output:
Array
(
    [0] => 02
    [1] => 01
    [2] => 1980
)

-----------------------------------------------------------
40) <?php
$x = '02-01-1980';
$y = explode('-', $x, 2); 
echo '<pre>';    print_r($y);    ?>
Output:
Array
(
    [0] => 02
    [1] => 01-1980
)
-----------------------------------------------------------
41) <?php
$x = array( 'A', 'B', 'C' );
$y = implode('+', $x); 
echo $y;     ?>
Output:
A+B+C
-----------------------------------------------------------
42) <?php
$x = 'cat';    $y = 10;
echo sprintf("I have %d %s(s)", $y, $x); ?>
Output:
I have 10 cat(s)
-----------------------------------------------------------
43) <?php   $month = 12;   $day = 1;
$year = 1980;
echo sprintf (" Date: %02d/%02d/%04d.", 
$month, $day, $year);
$year = 80;  echo sprintf (" Date: %02d/%02d/%04d.", 
$month, $day, $year); ?>
Output:
Date: 12/01/1980. Date: 12/01/0080.
--------------------------------------------------
44) <?php    $x = '8987';
$y = sprintf("Your password: %'*8s", $x);
echo $y;    ?>
Output:
Your password: ****8987
-----------------------------------------------------------
45) <?php    $x = 'word';
$y = sprintf("Your password: %'*-8s", $x);
echo $y;      ?>
Output:
Your password: word****
-----------------------------------------------------------
46) <?php      $s = 'puppies';
printf("I think %s are cute.", $s);   ?>
Output:
I think puppies are cute.
-----------------------------------------------------------
47) <?php    $s = '12/1/1980';
$a = sscanf($s, "%d/%d/%d");
echo '<pre>'; 
print_r($a);    ?>
Output:
Array
(
    [0] => 12
    [1] => 1
    [2] => 1980
)
-----------------------------------------------------------
48) <?php    $pass= '1234Abcad';
echo crypt($pass); ?>
Output:
Notice: crypt(): No salt parameter was specified.
$1$Qz5.ZX0.$chnowyfPA2v0BB7PEfHsD/
-----------------------------------------------------------
49) <?php
$pass= '1234Abcad';
echo md5($pass); ?>
Output:
f2b07b82bebf5b1c4be740d0fe9bf75e

50) <?php
$pass = 'Abcd654';
echo sha1($pass);  ?>
Output:
046eca5625ace40e373175a127dd59a6460a9e5b
-----------------------------------------------------------
51) <?php   $float = 1234567.891;
echo number_format($float);   ?>
Output:
1,234,568
-----------------------------------------------------------
52) <?php
$query_string = "key=value&color='red'";
parse_str($query_string, $array);
echo '<pre>';  print_r($array);   ?>
Output:
Array
(
    [key] => value
    [color] => 'red'
)
-----------------------------------------------------------
53) <?php
$array = array('I like dogs', 'I hate dogs');
$newarray = str_replace('dog', 'cat', $array);
print_r($newarray);    ?>
Output:
Array ( [0] => I like cats [1] => I hate cats )
-----------------------------------------------------------
54) <?php    $x = array('l', 'o');
$r = 'M';       $s= "AloA";
$n = str_replace($x, $r, $s);
echo $n;  ?>
Output:
AMMA
-----------------------------------------------------------
55)  <?php  echo substr('1234567890', 3)."<br>";
echo substr('1234567890', -3, 1)."<br>";
echo substr('1234567890', -3, -1);   ?>
Output:
4567890
8
89
---------------------------------------------------------
56) <?php
$x = array('12345', '54321');
$x = substr_replace($x, '****', -3, -2);
print_r($x);    ?>
Output:
Array ( [0] => 12****45 [1] => 54****21 )
-----------------------------------------------------------
57) <?php
echo substr_count('abcdcecf', 'c');  ?>
Output:
3
-----------------------------------------------------------
58) <?php     $x = 'Hello';
echo str_pad($x,10,  '#', 2);    ?>
Output:
##Hello###
-----------------------------------------------------------
59) <?php   echo str_repeat('333', 3)."<br>";
echo str_shuffle('Hello World!')."<br>";  ?>
Output:
333333333
r!HdolellWo 
----------------------------------------------------------
60) <?php
$x = str_split('Hello world!!', 2);
print_r($x);   ?>
Output:
Array ( [0] => He [1] => ll [2] => o [3] => wo [4] => rl [5] => d! [6] => ! )
-----------------------------------------------------------
61) <?php
$x = 'Wel_"come" to the jungle';
echo str_word_count($x); ?>
Output:
5
----------------------------------------------------------
62) <?php   $string = "<p>This is a paragraph.
 </p><strong>Yay!</strong>";
echo strip_tags($string), strip_tags($string, '<p>');?>
Output:
This is a paragraph. Yay!
This is a paragraph.  Yay!


63) <?php
$s = 'And now for something completely different';    $n = 'thing';
echo strpos($s, $n);      ?>
Output:
16
-----------------------------------------------------------
64) <?php
$s = 'hello';    $n = 'h';
if (strpos($s,$n) == FALSE)
{  echo 'Not Found!'; }   ?>
Output:
Not Found!
-----------------------------------------------------------
65) <?php   $s = 'hello';  $n = 'h';
if (strpos($s,$n) === FALSE)
{   echo 'Not Found!'; }
else{    echo 'Found!';   }?>
Output:
Found!
-----------------------------------------------------------
66) <?php     $s = 'hello';   $n = 'l';
echo strrpos($s, $n);     ?>
Output:
3
-----------------------------------------------------------
67) <?php    $s = 'www.example.com';
$n = 'EXAMPLE';
echo stristr($s, $n); ?>
Output:
example.com
---------------------------------------------------------
68) <?php
$s = 'Hello!! How are you?.<br>';
echo strlen($s);
echo strtolower($s);
echo strtoupper($s);
echo ucfirst($s);
echo ucwords($s);
echo strrev($s);  ?>
Output:
25hello!! how are you?.
HELLO!! HOW ARE YOU?.
Hello!! How are you?.
Hello!! How Are You?.
>rb<.?uoy era woH !!olleH

69) <?php
$s = 'www.example.com/index.htm';
$n= 'm';
echo strpbrk($s, $n);    ?>
Output:
mple.com/index.htm
-----------------------------------------------------------
70) <?php
$a = array( 'name' => 'Guru', 'mob' => '8689');
$n = array_chunk($a, 1);
print_r($n);   ?>
Output:
Array ( [0] => Array ( [0] => Guru ) [1] => Array ( [0] => 8689 ) )
   ---------------------------------------------------------
71) <?php
$a = array( 'name' => 'mathi', 'mob' => '8789');
$n = array_chunk($a, 1, TRUE);  print_r($n); ?>
Output:
Array ( [0] => Array ( [name] => mathi ) [1] => Array ( [mob] => 8789 ) )
-----------------------------------------------------------
72) <?php
$keys = array ( 'name', 'job', 'age' );
$values = array ( 'Bob', 'knight', 42 );
$n = array_combine($keys, $values);
print_r($n);    ?>
Output:
Array ( [name] => Bob [job] => knight [age] => 42 )
-----------------------------------------------------------
73) <?php
$a1 = array ( 'zero', 'one', 'name' => 'Bob' );
$a2 = array ( 'alsozero', 'name' => 
'John', 'job' => 'farmer' );
print_r( array_merge($a1, $a2) );   ?>
Output:
Array ( [0] => zero [1] => one [name] => John [2] => alsozero 
[job] => farmer )
-----------------------------------------------------------
74) <?php     $a = array ( 'zero', 'one', 'zero' );
print_r( array_count_values($a) );   ?>
Output:
Array ( [zero] => 2 [one] => 1 )
75) <?php      $a = array ('zero',
 'names' => array ( 'john', 'dave' ),
 'ages' => array ( 22, 34 ) );
  echo count($a)."<br>";
 echo count($a,1)."<br>";      ?>
Output:
3
7
-----------------------------------------------------------
76) <?php
$a1 = array( 'one', 'two', 'three', 'four' );
$a2 = array( 'two', 'three' );
$a3 = array( 'bob' => 'one' );
print_r( array_diff($a1, $a2, $a3) );?>
Output:
Array ( [3] => four )
-----------------------------------------------------------
77) <?php
$a1 = array( 'zero', 'name' => 'john', 'job' => 'john' );
$a2 = array( 'alsozero', 'job' => 'john' );
print_r( array_diff_key($a1, $a2));    ?>
Output:
Array ( [name] => john )
-----------------------------------------------------------
78) <?php
$a1 = array( 'zero', 'one', 'name' => 'john' );
$a2 = array( 'zero', 'alsoone', 
'name' => 'john' );
print_r( array_diff_assoc($a1, $a2) );   ?>
Output:
Array ( [1] => one )
-----------------------------------------------------------
79) <?php
$a1 = array( 'one', 'two');
$a2 = array( 'two', 'one', 'three', 'four' ); 
$a3 = array( 'bob' => 'one' );
print_r( array_intersect($a1, $a2, $a3));   ?>
Output:
Array ( [1] => one )
-----------------------------------------------------------
80) <?php
$a1 = array( 'zero', 'one', 'name' => 'john' );
$a2 = array( 'zero', 'alsoone', 'name' => 'john');
print_r( array_intersect_assoc($a1, $a2) ); ?>
Output:
Array ( [0] => zero [name] => john )

81) <?php
$a1 = array( 'CEO' => 'Bob', 'zero', 
'Owner' => 'Bob' );
print_r( array_flip($a1) ); ?>
Output:
Array ( [Bob] => Owner [zero] => 0 )
-----------------------------------------------------------
82) <?php     $a = array( 'zero',    'one',   'two',
 array( 'zero', 'name' => 'Bob' ) );
print_r( array_reverse($a) );    ?>
Output:
Array ( [0] => Array ( [0] => zero [name] => Bob ) [1] => two [2] => one [3] => zero )
----------------------------------------------------------
83) <?php
$a = array( 'CEO' => 'Bob', 'zero', 'Owner' => 'Bob' );
print_r( array_flip($a) );     ?>
Output:
Array ( [Bob] => Owner [zero] => 0 )
-----------------------------------------------------------
84) <?php
$a = array( 'name' => 'John', 'job' => 'unknown' );
var_dump( array_key_exists('name', $a) );
?>
Output:
bool(true)

85) <?php
$a = array( 'name' => 'Bob', 'age' => 12,
 'title' => 'owner' );
echo array_search('owner', $a);  ?>
Output:
title
-----------------------------------------------------------
86) <?php
$a = array( 'name' => 'John', 'age' => '12' ); 
$i = 12; 
var_dump( in_array( $i, $a) );?>
Output:
bool(true)
---------------------------------------------------


87) <?php
$a = array( 'name' => 'Bob', 'nickname' => 'Bob', 
'age' => '12' );
print_r( array_keys($a) );
?>
Output:
Array ( [0] => name [1] => nickname [2] => age )
-----------------------------------------------------------
88) <?php
$a = array( 'name' => 'Eric', 'age' => 12, 'zero' );
print_r( array_values($a) ); ?>
Output:
Array ( [0] => Eric [1] => 12 [2] => zero )
----------------------------------------------------------
89) <?php
$a = array( '2', '3', '1', 'a', 'b');
array_multisort($a);
print_r($a);    ?>
Output:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => a [4] => b )
-----------------------------------------------------------
90) <?php
$a = array( '2', '3', '1', 'a', 'b');
array_multisort($a, SORT_NUMERIC);
print_r($a);   ?>
Output:
Array ( [0] => b [1] => a [2] => 1 [3] => 2 [4] => 3 )
-----------------------------------------------------------
91) <?php
$a = array( '2', '3', '1', 'a', 'b');
array_multisort($a, SORT_DESC, 
SORT_NUMERIC);   print_r($a); ?>
Output:
Array ( [0] => 3 [1] => 2 [2] => 1 [3] => b [4] => a )
--------------------------------------------------
92) <?php     $a = array( '2', '3', '1', 'a', 'b');
array_multisort($a, SORT_DESC, 
SORT_STRING);    print_r($a);     ?>
Output:
Array ( [0] => b [1] => a [2] => 3 [3] => 2 [4] => 1 )
----------------------------------------------------------
93) <?php
$a = array('zero', 'one', 'two');
$v = array_pop($a);
echo $a; ?>
Output:
 two
----------------------------------------------------------
94) <?php
$a = array('zero');
array_push($a, 'one', 'two');
print_r($a);  ?>
Output:
Array ( [0] => zero [1] => one [2] => two )
-----------------------------------------------------------
95) <?php
$a = array('zero', 'one', 'two', 'name' => 'Bob');
$v = array_shift($a);
echo $v; print_r($a);     ?>
Output:
zeroArray ( [0] => one [1] => two [name] => Bob )
-----------------------------------------------------------
96) <?php
$a = array('zero');
array_unshift($a, 'one', 'two');
print_r($a);   ?>
Output:
Array ( [0] => one [1] => two [2] => zero )
-----------------------------------------------------------
97) <?php
$a = array( 'name' => 'Bob', 'job' => 'n/a',
 'age' => 12 );
$r = array_rand($a);
echo $r;     ?>
Output:
job
----------------------------------------------------------
98) <?php
$a= array( 'zero' => 'zero', 'one' => 'one', 
'two' => 'two');
shuffle($a);     print_r($a);   ?>
Output:
Array ( [0] => one [1] => zero [2] => two )
--------------------------------------------------
99) <?php
$a = array( 'zero', 'one', 'two', 'three', 'four', 'five' );
$r = array_slice($a, 3, 2);    print_r($r);    ?>
Output:
Array ( [0] => three [1] => four )
-----------------------------------------------------------
100) <?php
$a = array( 'zero', 'one', 'two' );
$r = array_splice($a, -2, 1);
print_r($a);    ?>
Output:
Array ( [0] => zero [1] => two )
-----------------------------------------------------------
101) <?php     $a = array( 0, 1 );
$r = array( 'zero', 'one' );
array_splice($a, 0, 0, $r);
print_r($a);    ?>
Output:
Array ( [0] => zero [1] => one [2] => 0 [3] => 1 )
-----------------------------------------------------------
102) <?php
$a = array( 'zero', 'one', 'zero', 'three' );
$n = array_unique($a);
print_r($n);    ?>
Output:
Array ( [0] => zero [1] => one [3] => three )
-----------------------------------------------------------
103) <?php
$a  = array( 'babe', 1, 'name' => 'Bob' );
sort($a);
print_r($a);   ?>
Output:
Array ( [0] => Bob [1] => babe [2] => 1 )
-----------------------------------------------------------
104) <?php
$a = array( 'babe', 1, 'name' => 'Bob' );
sort($a, SORT_NUMERIC);
print_r($a);    ?>
Output:
Array ( [0] => babe [1] => Bob [2] => 1 )
105) <?php
$a = array( 'babe', 1, 'name' => 'Bob' );
sort($a, SORT_STRING);  print_r($a);   ?>
Output:
Array ( [0] => 1 [1] => Bob [2] => babe )
----------------------------------------------------------
106) <?php
$a = array( 'babe', 'apple', 'name' => 'Bob' );
rsort($a);
print_r($a);    ?>
Output:
Array ( [0] => babe [1] => apple [2] => Bob )
-----------------------------------------------------------
107) <?php
$a = array( 'babe', 'apple', 'name' => 'Bob' );
asort($a);
print_r($a);    ?>
Output:
Array ( [name] => Bob [1] => apple [0] => babe )
-----------------------------------------------------------
108) <?php
$a = array( 'babe', 'apple', 'name' => 'Bob' );
arsort($a);
print_r($a); ?>
Output:
Array ( [0] => babe [1] => apple [name] => Bob )
-----------------------------------------------------------
109) <?php
$a = array( 'cute', 'fruit' => 'apple',
 'name' => 'Bob' );    ksort($a);
print_r($a);    ?>
Output:
Array ( [0] => cute [fruit] => apple [name] => Bob )
-----------------------------------------------------------
110) <?php
$a = array( 'cute', 'fruit' => 'apple',
 'name' => 'Bob' );
krsort($a);
print_r($a);  ?>
Output:
Array ( [name] => Bob [fruit] => apple [0] => cute )

111) <?php
$v = 'value';
$i = 10;
$n = 'Bob';
$a = 12;
$a1 = array( 'n', 'a' ); 
$r = compact('v', 'i', $a1);
print_r($r);  ?>
Output:
Array ( [v] => value [i] => 10 [n] => Bob [a] => 12 )
-----------------------------------------------------------
112) <?php
$name = 'John';
$a = array( 'name' => 'Bob', 'age' => 32 );
$x = extract($a);
echo "$name - $age";   ?>
Output:
Bob - 32
-----------------------------------------------------------
113) <?php
$a = array( 'zero', 'one', 'two', 'three', 'four' );
echo current($a).'<br> '; 
echo key($a).'<br> '; 
echo next($a).'<br> '; 
echo current($a).'<br> '; 
echo end($a).'<br> '; 
echo prev($a).'<br> '; 
echo current($a);    ?>
Output:
zero
0
one
one
four
three
three
-----------------------------------------------------------
114) <?php
$a = array( 'name' => 'Bob', 'title' => 'CEO',
 'age' => '30' );
echo http_build_query($a);  ?>
Output:
name=Bob&title=CEO&age=30
-----------------------------------------------------------
115) <?php
$a = array( 'key', 'name' );
print_r( array_fill_keys($a, 'value') );
?>
Output:
Array ( [key] => value [name] => value )
-----------------------------------------------------------
116) <?php
$a = array('img4.jpg', 'img41.jpg', 'img3.jpg', 
'img11.jpg');// natcasesort($a);
natsort($a);   print_r($a);    ?>
Output:
Array ( [2] => img3.jpg [0] => img4.jpg [3] => img11.jpg [1] => img41.jpg )
-----------------------------------------------------------
117) <?php   echo date('m-d-y')."<br>";
echo date('M jS, Y')."<br>";
echo date('g:i:sA')."<br>"; 
echo gmdate('M jS, Y e')."<br>";
var_dump( time() ) . "<br>";
var_dump( mktime(1,23,40,3,17,2008) )."<br>"; ?>

Output:
09-30-17
Sep 30th, 2017
3:30:53PM
Sep 30th, 2017 UTC
int(1506778253) int(1205713420)
-----------------------------------------------------------
118) <?php
var_dump( abs(-21) );
var_dump( dechex(4294967295) );
var_dump( pow(2, 4) );
var_dump( sqrt(16) );
var_dump( rand(), rand(1,100) ); 
$array = array(4, 7, 2);
var_dump( max($array) ); 
var_dump( mt_rand(),
mt_rand(1,100) ); ?>
Output:
int(21) string(8) "ffffffff" int(16) float(4) int(26674) int(58) int(7) int(2028323024) int(14)


Part II
1) Image Upload:
<html>    <body>
<form action="upload1.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="f1">
    <input type="submit" value="Upload" name="submit">
</form>
<?php
$url = 'C:\xampp\htdocs\IMAGES_UPLOAD\uploads/';
$dest = $url . basename($_FILES['f1']['name']);   // 
$upload=move_uploaded_file($_FILES['f1']['tmp_name'], $dest); 
if($upload) 
{      echo "File is successfully uploaded";    } 
else 
{     echo "There is an error!!!";   }?>
2) Image Download:
<html>
<body>
<a href="download.php?file=dhoni.png"> dhoni</a>
</body>
</html>
<?php
if(!empty($_GET['file']))
{              $fileName = basename($_GET['file']);
	$filePath= 'files/'.$fileName;
	if(!empty($fileName)&& file_exists($filePath))
	{    header("Content-Disposition:attachment;fileName=$fileName");
		readfile($filePath);
		exit;     }     }     ?>
3) Create File:
<?php
$ourFileName = "Guhan.txt";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);
?>
4) Open file:
<?php
$ourFileName = "testFile.txt";
$fh = fopen($ourFileName, 'X') or die("Can't open file");
fclose($fh);
?>
5) Write a text into file:
<?php
$myFile = "Guhan.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper\n";
fwrite($fh, $stringData);
$stringData = "Tracy Tanner\n";
fwrite($fh, $stringData);
fclose($fh);
?>
6) Read text from file:
<?php
$myFile = "testFile.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 20);// it reads 20 characters only
//unlink($myFile);
fclose($fh);
echo $theData;
?>
7) Truncate a file:
<?php
// it erase all the data from your file
$myFile = "testFile.txt";
$fh = fopen($myFile, 'w');
fclose($fh);
?>
8) Set Cookie and View Cookie:
<?php
setcookie('username','kathir', time()+20);
?>
<?php
echo $_COOKIE['username'];
?>
9) Set Session and View session:
<?php
session_start();
$_SESSION['name']= "Guhan";
//session_destroy();   ?>
<?php
session_start();
if(isset($_SESSION['name']))
{header("Location:session_view.php");
return false; }
else {echo "please check once again"; }  
echo "Guhan";
?>
10) Connect Database:
<?php
     /* Connect to Databse  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 if($connect)
	 {echo "Successfully connected to database";}
?>
11) Create Database:
<?php
     /* Connect to Databse  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 $query="create database Trainee";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {echo "New Databse is created successfully";}
?>

12) Create table:
<?php
     /* Create New Table  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 mysql_select_db("trainee");
	 $query="create table Details(Name varchar(20), Father varchar(20), Mobile varchar(20))";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {echo "New Table is created successfully";} 
?>
13) Insert data into table:
<?php
     /* Insert data into table  */
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $connect=mysql_connect($host, $user, $pass);
	 mysql_select_db("trainee");
	 $query="Insert into details values('Guhan', 'Ganesan', '979181****')";
	 $mysql=mysql_query($query);
	 if($mysql)
	 {    echo "The Data is inserted into the table is success!!";  } 
?>
14) Fetch data from database:
<?php
$dbhost="localhost";
     $dbuser="root";
     $dbpass="";
     $conn=mysql_connect($dbhost,$dbuser,$dbpass);
     mysql_select_db("trainee"); 
     $result = mysql_query("select * from details 
     where name='Guhan'");
     $row= mysql_fetch_row($result); // It stores values in an array
     echo $row[0];
	 echo $row[1];
	 echo $row[2];
?>
15) Send data without submit button:
<html>
<head>
<script>
function myFunction()
{
document.getElementById("myForm").submit();
}
</script>
</head>
<body>
<form method="post" action="Without_button.php" id="myForm">
<input type="text" name="name" /><br>
<input type="text" name="mobile" /><br>
<input type="text" name="age" /><br>
</form>
<div onclick="myFunction()">Click me</div>
</body>
</html>
<?php
echo $_POST['name']."<br>";
echo $_POST['mobile']."<br>";
echo $_POST['age']."<br>";
?>
16) PHP Validation:
<?php
			 $a="";$b="";$x="";$y="";$m="";
			  if(empty($_POST['name']))
			  {  $a="Name must be filled out!!";  }
			  else  {	  $x=$_POST['name'];
				  $pattern="/^[a-zA-Z]*$/";
		          if (!preg_match($pattern,$x)){  $m="Not-valid Name"; }   }
			   if(empty( $_POST['mob']))
			  {  $b="Mobile must be filled out!!";  }
			   else  {  $y=$_POST['mob'];  }
			  ?>
			   <html>
			<form action='Required.php' method='post'>
			Name: <input type='text' name='name'> 
			<span style='color:red;'><?php echo $a; echo $m; ?> </span>
			<br><br>
			Mob: <input type='text' name='mob'>
			<span style='color:red;'><?php echo $b; ?> </span>
			<br> <br>
            <input type='submit' name='submit' value='submit'/>
			</form>          
       </html>		<?php			     
			echo "<b>Name:</b>".$x."<br>";
			echo "<b>Mob:</b>".$y."<br>";
			echo $m;
			?>  
17) Validation using regular expression:
<form action="Regular_Expression.php" method="post">
      <input type="text" name="name" >
	  <input type="submit" name="submit" value="submit">
</form>
<?php
     $x=""; $a=""; $b="";
	 if(!empty($_POST['name']))
	 {
		 $x=$_POST['name'];
		 $pattern="/^[a-zA-Z]*$/";
		 if (preg_match($pattern,$x))										{    $a="valid Id"; }										else	{   $b="Invalid Id"; }											 }	
    echo $a; echo $b;	 
?>

18) Example Class:
<?php
class User
{    public $name;// class variables, 
	//access modifier "public"(variable can be accessed from outside the class).
    public $age;
        public function Describe()// to access something from the object used before the operator. 
    {
        return $this->name . " is " . $this->age . " years old";
    }
}
$user = new User();
		$user->name = "John Doe"; //Give me the name variable on the $user object"
		$user->age = 42;
		echo $user->Describe();
?>
19)  Encapsulation:
<?php
class Person
{    private $_name;
    private $_age;
    function calc($x)
    {    $y=10;
	     $z=10/$x;
        if ($x==0)
        {   
            throw new Exception("Cannot assign zero");
        }
        else {  echo $z; }
        }
   public function setAge($age)
    {       if (!is_int($age))   {throw new Exception("Cannot assign non integer value to integer field, 'Age'") }  $this->_age = $age;     }
   public function yearsToRetire()
    {   return 67 - $this->_age;     }    }
$person = new Person("Wes");
$person->setAge(31);
echo $person->yearsToRetire();
?>
20) Inheritance:
<h2> Single Inheritance</h2>
<?php
class Univ
{    public function details($x)
    {      echo  $x. "<br>"  }
        public function rank()
    {       echo "First Class"."<br>"; }
}
class College extends Univ
{    public function details($x)
    {        echo $x."<br>";    }
}
$Obj1 = new Univ();
$Obj2 = new College();
$Obj1->details('Anna Universtity'); 
$Obj1->rank();       
$Obj2->details('Periyaar'); 
?>

<h2> HIERARCHIAL </h2>
<?php
class RBI
{    public function principle($x)
    {       echo  $x. "<br>";  }
        public function interest()
    {        echo "First Class"."<br>";  }   }
class Axis extends RBI
{    public function interest($x)
    {       echo $x."<br>";    }
}
class IOB extends RBI{
	public function principle()
	{             $m=30;
		$n=45;
		echo $m+$n."<br>";
	}
	public function rate()
	{             $r=10;
		$s=20;
		echo $r+$s;
	}
}
//$Obj1 = new RBI();
$A = new Axis();
$A->interest('Anna Universtity'); 
$B = new IOB();
$B->principle();
$B->rate();
?>
<h2> MULTILEVEL </h2>
<?php
     class Grandfa{
		  public function sing(){
		 echo "I am singing a song<br>";
		 }
		 public function dance()
		 { echo "I know dance<br>"; }
	 }
	 class Son extends Grandfa{
		 public function teaching(){
			echo "I am a teacher<br>"; }
		 public function dance()
		 { echo "I know dance very well<br>"; }
		}
	  class Grandson extends Son{
		public function teaching(){
			  echo "I am a grandson I know with teaching<br>"; }
		public function sing(){
			echo "I am a grandson I know with teaching<br>";
		}	 
		 public function dance(){
			 echo "I am grandson I know dance also<br>";
		 }     }
	 $p = new Grandfa();
	 $q = new Son();
	 $r = new Grandson();
	  $p->sing();
	 $p->dance();
	  $q->teaching();
	 $q->dance();
	  $r->teaching();
	 $r->sing();
	 $r->dance();
?>
21) Interface:
<?php
     Interface RBI{
	            public function interest();
		public function loan();     }
    class SBI implements RBI {
	               function interest(){echo "Hi"."<br>"; }
		 function loan(){echo "How are you!"."<br>";}
		 function subsidy(){echo "This is my class";}    }
	 $obj=new SBI();
	 $obj->interest();
	 $obj->loan();
	 $obj->subsidy();
?>
22) Polymorphism:
<?php
class Univ
{    public function details($x)
    {    echo  $x. "<br>";    }
       public function rank()
    {  echo "First Class"."<br>"   }
}
class College extends Univ
{    public function details($x, $y)
    {     echo $x+$y."<br>";    }
}
Class Diploma extends Univ {
	public function details($x,$y,$z){
		echo $x+$y+$z;   	}      } 
$u = new Univ();
$c = new College();
$d = new Diploma();
$u->details(20);
$c->details(20,40);
$d->details(20,40,60);
?>


