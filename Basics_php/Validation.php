<html>
	<form action='' method='post'>
	  Name: <input type='text' name='x'> 
			<br><br>
	 Mobile:<input type='text' name='y'>
			<br><br>
			<input type='submit' name='submit' value='submit'/>
	</form>          
</html>
<?php	
 if(isset($_POST['submit']))
 {			
			  if(empty($_POST))
			  {
				  echo "<script> alert('All should be filled')</script>";
		      }
			  else if(empty($_POST['x']))
			  {
				  echo "<script> alert('Name should be filled')</script>";
			  }
			  else if(empty($_POST['y']))
			  {
				  echo "<script> alert('Mobile should be filled')</script>";
			  }
			  else
			  {
				  echo "Name: ".$_POST['x']."<br>";
				  echo "Mobile :".$_POST['y']."<br>";
				  unset($_POST['submit']);
				  unset($_POST['x']);
				  unset($_POST['y']);
			  }
			  
 }
?>  
