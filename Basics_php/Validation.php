       
	   
			 <?php
			 $a="";$b="";$x="";$y="";$m="";
			  if(empty($_POST['name']))
			  {
				  $a="Name must be filled out!!";
				  
			  }
			  else
			  {
				  $x=$_POST['name'];
				  $pattern="/^[a-zA-Z]*$/";
		          if (!preg_match($pattern,$x))
										{
											$m="Not-valid Name"; 
										}
				      				  
			  }
			  
			  if(empty( $_POST['mob']))
			  {
				  $b="Mobile must be filled out!!";
				  
			  }
			   else
			  {
				  $y=$_POST['mob'];
				  
		 	  }
			  ?>
			  
			  
			  <html>
			<form action='Required.php' method='post'>
			Name: <input type='text' name='name'> 
			<span style='color:red;'><?php echo $a; echo $m; ?> </span>
			<br><br>
			Mob: <input type='text' name='mob'>
			<span style='color:red;'><?php echo $b; ?> </span>
			<br> <br>
            <input type='submit' name='submit' value='submit'/>
			</form>          
            </html>
			
			<?php
			      
			echo "<b>Name:</b>".$x."<br>";
			echo "<b>Mob:</b>".$y."<br>";
			echo $m;
			?>  
			
			
			