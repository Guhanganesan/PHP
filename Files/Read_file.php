<?php // File Read
      $m=fopen("Guhan.txt", "r");
      $r=fread($m,10);
      if($r)
      {
          echo $r;
      }
      fclose($m);
?>