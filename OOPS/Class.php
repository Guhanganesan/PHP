<?php
class Nokia{
	
	public $name="Guhan";
	
	function __construct(){
		$this->name="Anbu";
		echo $this->name;
	}
}
$obj= new Nokia();
?>

<h2> Single Inheritance</h2>
<?php
class Univ
{  
   public $name="Anna Univ";
   public static $rank=10;
   public function details($x)
    {
        echo  $x. "<br>";
    }
    
    public function rank()
    {
        echo "First Class"."<br>";
    }
}


class College extends Univ
{
    public function details($m)
    {
        echo $m."<br>";
		
    }
	public function callUniv()
	{
		echo self::$rank;
		parent::rank();
	}
}
$Obj1 = new Univ();
$Obj1->details('Library'); 
$Obj1->rank(); 
echo $Obj1->name;

$Obj2 = new College();      
echo $Obj2->name; 
$Obj2->details($Obj2->name);
$Obj2->callUniv();
?>

<h2> HIERARCHIAL </h2>

<?php
class RBI
{   
    public $I=5;

    public function principle($x)
    {
        echo  $x. "<br>";
    }
    
    public function interest()
    {
        echo "First Class"."<br>";
    }
}
class Axis extends RBI
{
    public function interest($x)
    {
        echo $x."<br>";
		
    }
}

class IOB extends RBI{
	public function principle()
	{
		$m=30;
		$n=45;
		echo $m+$n."<br>";
	}
	public function rate()
	{
		$r=10;
		$s=20;
		echo $r+$s;
	}
}
//$Obj1 = new RBI();
$A = new Axis();
$A->interest('Anna Universtity'); 

$B = new IOB();
echo $B->I."<br>";
$B->principle();

$B->rate();
?>

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

<?php
      class RBI{
		 public static $r=10;     // private
		 public function  rate()   // private
		   {
			  echo "This is parent class<br>"; 
		   }
	   }
	   
	   class SBI extends RBI{
		   
		   function rate1()
		   {
			   echo "This is child class<br>";
			   
			   //self::$r=10;
			   
			   echo(self::$r);    // cannot access property of $r
			   
			   parent::rate();  //Fatal error: Call to private method RBI::rate() from context 'SBI' 
		   }
	   }
	   
	   $obj1 = new SBI();
	   $obj1->rate1();
?>

<?php
      abstract class RBI{
		  public static $name="Guhan";
		   function  rate() // abstract function should not contain a body
		   {
			  echo "This is an abstract class<br>"; 
		   }
	   }
	   
	   class SBI extends RBI{
		   
		   function rate1()
		   {
			   echo self::$name; // access to undeclared static property
			   parent::rate();
		   }
	   }
	   
	   $obj1 = new SBI();
	   $obj1->rate1();
?>

<?php
       /* It is a collection of abstract method. 
	      It does not spport multiple inheritance.
		  We should implements all the methods of parent class(interface). */
	   

     Interface RBI{
		         
				//public $r=10; cannot include
				
				/*public function loan(){
					//echo "RBI provides loan upto 20000<br>"; // cannot contain body
				}*/
				public function loan();
	            public function interest();
				
				
}
 
     class SBI implements RBI {
		 
	     function loan(){
			 
							echo "SBI provides loan upto"."30000"."<br>"; 
			            }
						
		 function interest(){echo "SBI Provides Interest rate at 3% <br>";}
		 
		 function getSubsidy(){echo "SBI Provides subsidy also"; }
	 }
 
	 $obj=new SBI();
	 $obj->interest();
	 $obj->loan();
	 $obj->getSubsidy();
?>

<?php // JSON
      $host="localhost";
	  $user="root";
	  $pass="";
	  mysql_connect($host,$user,$pass);
	  mysql_select_db("payilagam");
	  $q=mysql_query("select * from data");
	  
	  
	  
	    $data = array();
		while($row = mysql_fetch_assoc($q))
		{
			$data[] = $row;
		}
		
		$x = json_encode($data);
	  
	    echo $x;
?>











