<?php   
 include("db.php");
 	 
 class Home
    {
         
		 function sentData($name,$user,$pass)
		 {
		  /*-- for global value--
		  $this->name=$name;  $this->user=$user;    $this->pass=$pass; */
		
          $sql="Insert into ex2 values('$name', '$user','$pass')";
		   
		  if(mysqli_query($conn, $sql))
		  {
			  echo "Successfully Inserted";
		  }
		  else
		  {
			  echo "Error";
		  }
		 
		 }
	}
          $obj = new Home();
		  $obj->sentData($_POST['name'],$_POST['user'],$_POST['pass']);
		  //$obj->sentData("Guhan","guhan",1234);
?>