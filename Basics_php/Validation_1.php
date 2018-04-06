

<?php

     $x=20;
	 
	 $y=50;
	 
	 $z=40;
	 
	 $a="Guhan";
       
?>


<?php

$x=40;

$y=30;

$z=100;

?>




<?php
       echo $x;

?>



<?php
       echo $y;

?>



<?php
       echo $z;

?>


<?php
       echo $a;

?>






<html>
       <form action="Validation_1.php" method="post" > 
	           <input name="name"/> <p> <?php if(empty($_POST['name'])){echo "Name Must filled";} ?> </p>
			   <input name="mob"/> <p>  <?php if(empty($_POST['name'])){echo "Mob Must filled";} ?> </p>
			   <input type="submit" name="submit" value="submit"/>
	   </form>
	   <?php  
	         if(empty($_POST['name']))
			 {
				 $m="";
			 }
			 else
			 {
				$m=$_POST['name']; 
			 }
			 if(empty($_POST['mbo']))
			 {
				 $n="";
			 }
			 else
			 {
				$n=$_POST['mob']; 
				  
			 }
			 
	          echo $m."<br>";
	          echo $n;
	   ?>
	   
	   
	   

</html>
