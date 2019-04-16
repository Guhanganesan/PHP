#Interview Programs
<?php
        $num  = 10;
        $num1 = 20;
        print ++$num + $num1++;
        ?>
		
		<?php
         $num  = "10";
         $num1 = "20";
         print $num+$num1;
        ?>
		
		<?php
		     $num =20;
			 echo "$num";
		?>
		
		<?php
		     $num="10 Rupees";
			 $num1="20 Rupees";
			 print $num+$num1;
		?>
		
		
		<?php
		    
		    Static $x=10;
			print $x;
			$x++;
			++$x;
			print $x;
		?>
		
	<?php
        $name = "Guhan";
        switch ($name) {
        case "Anbu":
            echo "His name is anbu";
			break;
        case "Guhan":
            echo "His name is Guhan";
         case "Raja":
            echo "His name is Raja"; 
	     	break;
 		default:
		    echo "No name found";
		}

 ?>
 
         <?php
        $user = array("Guhan", "Anbu", "Raja", "Kesav");
        for ($start=0; $start < count($user); $start++)	
	    	{
            if ($user[$start] == "Raja") 
			       continue;
            printf($user[$start]); 
      }
      ?>
		
		
		<?php
        $state = array ("Karnataka", "Goa", "Tamil Nadu",
        "Andhra Pradesh");
        echo (array_search ("Tamil Nadu", $state) );
        ?>
	
	<?php
    $age = array("Hari" => "21", "Rohit" => "19", "Mathan" => "23");
    ksort($age);
    foreach($age as $x => $x_value)
    {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
    
    
    Answers:
    31	
    30	
    20	
    
    30	
    10
    12	
    His name is GuhanHis name is Raja GuhanAnbuKesav
    2	
    Key=Hari, Value=21
    Key=Mathan, Value=23
    Key=Rohit, Value=19
    
