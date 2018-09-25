<form method="post" action="" autocomplete="off">
Start:<input name="input1"><br><br>
End:<input name="input2"><br><br>
       <input type="submit" name="submit" value="submit"></button>
</form>


<?php
     if(!empty($_POST['submit']))
	 {
		$start = $_POST['input1'];
		
		$end= $_POST['input2'];
		
		   /*   echo 1+2;
				echo 2+2;
				echo 3+2;
				echo 4+2;
				echo 5+2;
		   */
		
		
		for($start; $start<=$end;$start++)
		{
			echo $start+2;
			echo "<br>";
		}
	
     }
?>

