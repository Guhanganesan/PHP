<!-- Constant: Variables are temporary storage while Constants are permanent. -->
<?php
define('name', 'guhan');
echo name;
 
?>

<br><br>

<?php
define('x', 10);
define('y',  '20');
define('z',  'x+y');
define('z1',  x+y);
echo z."<br>";

echo z1."<br>";

echo x+y."<br>";

$x=60;

echo $x+x;
?>
<br>
<br>

<!-- Magic Constants: It is a predefined constants that change depending on where they are used. -->
<?php
echo "<br>Line number is:" . __LINE__ . "<br>";
?>

<br><br>

<?php
echo "The full path of this file is: " . __FILE__;
?>

<br> <br>


<?php
echo "The directory of this file is: " . __DIR__;
?>


<br> <br>


<?php
function myFunction(){
    echo  "The function name is - " . __FUNCTION__;
}
myFunction(); 
?>

<br> <br>

<?php
class MyClass
{
    public function run(){
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->run(); // Displays: MyClass
?>


<br><br>


<?php
class Bank
{
    public function rate(){
        echo __METHOD__;
    }
}
$obj = new Bank();
$obj->rate(); 
?>

<br><br>
















































