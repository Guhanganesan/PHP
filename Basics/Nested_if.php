<form method="post" action="" autocomplete="off">
Enter Salary Limit:<input name="input1"><br><br>
       <input type="submit" name="submit" value="submit"></button>
</form>
<?php
     if(!empty($_POST['submit']))
	 {
		$salary = $_POST['input1'];
			
		if($salary<0 || $salary==0)
		{
		   echo "Should not use zero or negative values";
	    }
		else if($salary>0 && $salary<=5000)
		{
			$bonus=10*($salary/100);
			$salary=$salary+$bonus;
			echo $salary;
		}
		else if($salary>5000 && $salary<=10000)
		{
			$bonus=20*($salary/100);
			$salary=$salary+$bonus;
			echo $salary;
		}
		else if($salary>10000)
		{
			echo "Salary limit is exceeds";
		}
     }
?>
