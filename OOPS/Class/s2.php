<?php    
   class View 
    {    
	     function viewData($user,$pass)
		 {          
		  $conn= mysqli_connect("localhost", "root", "","anbu");
          $sql="select * from ex2 where User='$user' and Pass='$pass' ";
		   
		  $result=mysqli_query($conn, $sql);
		  $r = mysqli_fetch_row($result);
		  $_SESSION['user']=$r[1];	  
		  $_SESSION['pass']=$r[2];
          if(!$_SESSION['user'])
		  {
			  header("Location:view.php");
		  }			  
		  if($r)
		  {
			  echo "<a href='login.php'>Home</a><br><br>";
			  echo $r[0]."<br>";
			  echo $r[1]."<br>";
			  echo $r[2]."<br>";
		  }
		  else
		  {
			   header("Location:view.php");
		  }
		 
		 }
	}
          $obj = new View();
		  if($_POST['submit'])
		  {	  
		  $obj->viewData($_POST['user'],$_POST['pass']);
		  }
		  else
		  {
			  header("Location:view.php");
		  }	  
?>