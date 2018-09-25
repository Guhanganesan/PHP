<form method="post" action="" autocomplete="off">
Data1:<input name="input1"><br><br>
Data2:<input name="input2"><br><br>
       <input type="submit" name="submit" value="submit"></button>
</form>
<?php
     if(!empty($_POST['submit']))
	 {
		$first = $_POST['input1'];
		
		$second = $_POST['input2'];
		
		if($first>$second)
		{
		   echo "First is greater";
	    }
		else
		{
			echo "Second is greater";
		}
     }
?>
