<?php   
  class Home
    {
         public $name="";
		 public $user="";
		 public $pass="";
		 function sentData($name,$user,$pass)
		 {		  
		  $this->name=$name;  $this->user=$user;    $this->pass=$pass;
		  $conn= mysqli_connect("localhost", "root", "","anbu");
          $sql="Insert into ex2 values('$this->name', '$this->user','$this->pass')";
		   
		  if(mysqli_query($conn, $sql))
		  {
			  //echo "Successfully Inserted";
			  header("Location:login.php");
		  }
		  else
		  {
			  echo "Error";
		  }
		 
		 }
	}
          $obj = new Home();
		  if($_POST['submit'])
		  {
		  $obj->sentData($_POST['name'],$_POST['user'],$_POST['pass']);
		  }
		  else
		  {
			  header("Location:login.php");
		  }
?>