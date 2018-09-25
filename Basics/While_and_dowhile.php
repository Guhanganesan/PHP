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
		/*
		while($start<=$end)
		{
			echo $start+2;
			echo "<br>";
			$start++;
		}
		*/
		
		do
		{
			echo $start+2;
			echo "<br>";
			$start++;
		}
		while($start>$end); // 5>10 -> False
	
     }
?>
