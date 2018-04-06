<?php
/*
//   Method Overloading
class A{

    public function run($x) {
         
        echo $x;

    }
    
    public function run($x,$y) {

       	echo $x.$y;

    }
    
}

$obj = new A;
$obj->run(10);
$obj->run(10,20);
                     // Output: Fatal error: Cannot redeclare A::run() in C:\xampp\htdocs\OOPS\test.php on line 11
*/
?>


<?php
//   Method Overriding
class A{

    public function run($x) {
         
        echo $x;

    }
}

class B extends A{
	function run($x,$y)
	{
		echo$x."<br>".$y;
	}
}

$obj = new A;
$obj1 = new B;
$obj->run(10);
$obj1->run(20,10);
      
?>