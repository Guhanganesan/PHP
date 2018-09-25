<form method="post" action="" autocomplete="off">
Enter Month in number wise:<input name="input1"><br><br>
       <input type="submit" name="submit" value="submit"></button>
</form>
<?php
     if(!empty($_POST['submit']))
	 {
		 $month = $_POST['input1'];
         $year = 2018;
         $numDays = 0;

        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $numDays = 31;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                $numDays = 30;
                break;
            case 2:
                if ((($year % 4 == 0) && 
                     !($year % 100 == 0))
                     || ($year % 400 == 0))
                    $numDays = 29;
                else
                    $numDays = 28;
                break;
            default:
                echo ("Invalid month.");
                break;
        }
        echo "Number of Days = ".$numDays;
    }
	
?>
