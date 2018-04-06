<?php
class A {
    protected $x;
    public function __construct() {
		
        $this->run();
    }
    protected function run() {
        $this->x = 55;
    }
}
?>

<?php
class B extends A {
	
    public function __construct() {
        parent::__construct();
    }
    public function getData() {
        return $this->x; // will return the $data property 
                            // that's defined in the MyParent class
    }
}


$a = new B();
echo $a->getData();
?>

