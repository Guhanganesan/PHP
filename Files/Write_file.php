<?php  // File write
       $m= fopen("Guhan.txt", "w");
       $w= fwrite($m, "This is my text1");
       $w= fwrite($m, "This is my text2");
       if($w)
       {
           echo "New data is edited";
       }
       fclose($m);
?>