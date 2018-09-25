<form method="post" action="test.php">
Data1:<input name="input1"><br><br>
Data2:<input name="input2"><br><br>
       <input type="submit" name="submit" value="submit"></button>
</form>

<?php
     if(!empty($_POST['submit']))
	 {
		echo $_POST['input1'];
		echo "<br>";
		echo $_POST['input2'];
     }
?>
