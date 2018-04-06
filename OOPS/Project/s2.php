<?php    
   class View 
    {    
	     function viewData($user,$pass)
		 {          
		  $conn= mysqli_connect("localhost", "root", "","anbu");
          $sql="select * from ex2 where User='$user' and Pass='$pass' ";
		   
		  $result=mysqli_query($conn, $sql);
		  $r = mysqli_fetch_row($result);
		  if($r)
		  {   session_start();
		      $_SESSION['user']=$r[1];	  
		      $_SESSION['pass']=$r[2];
			  echo "<a href='login.php'>Home</a><a href='http://localhost/OOPS/Project/s3.php'>View Profile</a><br><br>";
			  //echo $r[0]."<br>";
			  //echo $r[1]."<br>";
			  //echo $r[2]."<br>";
			  echo $_SESSION['user'];
			  echo $_SESSION['pass'];
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



