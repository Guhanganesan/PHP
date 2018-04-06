<?php
     $date=$_POST['date'];
     $month=$_POST['month'];
     $year=$_POST['year'];
	 $dob=$date."-".$month."-".$year;
	 echo $dob;
?>

<form method="post" action="Date_year_month.php">
      DOB:<select name="date">
           <?php
		       for($date=1;$date<=31;$date++)
			   {
				   echo "<option>".$date."</option>";
			   }
            ?>
     	  </select>
          <select name="month">
           <?php
		       $array=array("January","February","March","April","may","June","July","August","September","October","November","December");
   
		       for($c=0;$c<=11;$c++)
			   {
				   echo "<option>".$array[$c]."</option>";
			   }
            ?>
     	  </select>
		  <select name="year">
           <?php
		       for($year=1950;$year<=2018;$year++)
			   {
				   echo "<option>".$year."</option>";
			   }
            ?>
     	  </select> <br><br>
		  <input type="submit" name="submit" value="submit">
</form>