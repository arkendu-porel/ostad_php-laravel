<?php
   for ($i=0; $i<=50; $i++) { 
      if ($i%5==0) {
         echo "skiped \n";
         continue;
      }
      echo $i."\n";
   }
?>