<?php
      class School
	  {
		public $name="Veda";
        private $salary=20000;
        protected $staff =20;
        		
	  }
      $obj = new School();
	  echo $obj->name;
	  $obj->age=50;
	  echo $obj->age;
	  // echo $obj->salary;
	  // echo $obj->staff;
?>


<?php
      class Institute extends School
	  {
		  public $color="red";
		  function selectStaff()
		  {    $p=30;
			   $this->name="Nehru";
			   $this->salary=23000;
			   $this->staff=15;
			  
		  }
		  function set()
		  {
			  echo $this->salary;
		  }
	  }
	  $obj=new Institute();
	  $obj->selectStaff();
	  echo $obj->name;
	  echo $obj->salary;
	  $obj->set();
	  
	  //echo $obj->staff;
	  echo $obj->color;
	  echo $obj->p;
	    
?>