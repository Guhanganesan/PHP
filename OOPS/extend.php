<?php
class A{
	
	public $name="Guhan";
	
	function __construct(){
		$this->name="Anbu";
		//echo $this->name;
	}
}

class B extends A{
	
	public function run()
	{
	   echo self::$name;
	   parent::__construct();
	}
	
}

$obj= new B();

$obj.run();
?>
