<?php 
      $n="Guhan.txt";
      
      $c= fopen($n,"w");
      
      if($c)
      {
          echo "New file is created successfully";
      }
      
      fclose($c);
?>