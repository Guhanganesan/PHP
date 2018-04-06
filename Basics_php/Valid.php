

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

<?php      
             $l="";$m="";$n="";$o="";
	         if(empty($_POST['name']))
			 {
				 $l="Name must";
			 }
			 else
			 {
				$m=$_POST['name']; 
			 }
			 if(empty($_POST['mob']))
			 {
				 $n="Mob must";
			 }
			 else
			 {
				$o=$_POST['mob']; 
				  
			 }
			 
	          
	   ?>




<html>
       <form action="Valid.php" method="post" > 
	           <input name="name"/> <p> <?php echo $l; ?> </p>
			   <input name="mob"/> <p>  <?php echo $n; ?> </p>
			   <input type="submit" name="submit" value="submit"/>
	   </form>
	   
	   
	   
		   <?php
		   
		         echo $m."<br>";
				 echo $o;
		   ?>

</html>
