           <h2> VALIDATION </h2>
			 <?php
			 $a="";$b="";$x="";$y="";
			  if(empty($_POST['name']))
			  {
				  $a="Name must be filled out!!";
				  
			  }
			  else
			  {
				  $x=$_POST['name'];
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
			<span style='color:red;'><?php echo $a; ?> </span>
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
			?> 
			
			
			
			