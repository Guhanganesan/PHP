<?php    
   session_start();
   class Profile 
    {    
	     function viewProfile($user,$pass)
		 {          
		  $conn= mysqli_connect("localhost", "root", "","anbu");
          $sql="select * from ex2 where User='$user' and Pass='$pass' ";
		   
		  $result=mysqli_query($conn, $sql);
		  $r = mysqli_fetch_row($result);
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
          $obj = new Profile();
		    
		  $obj->viewProfile($_SESSION['user'],$_SESSION['pass']);
		  if(!$_SESSION['user'] && !$_SESSION['pass'])
		  {
			  header("Location:view.php");
		  }
?>



