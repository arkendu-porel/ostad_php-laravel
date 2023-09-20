<?php
   function printNumber($start, $end, $step){
      if ($start%2 !=0) {
         $fStart = $start+1;
      }else {
         $fStart = $start;
      }
      for ($i=$fStart; $i<=$end ; $i+=$step) { 
         echo $i.", ";
      }
   }

   function printNumber2($start, $end, $step){
      if ($start%2 !=0) {
         $fStart = $start+1;
      }else {
         $fStart = $start;
      }
      $i=$fStart;
      while ($i<=$end) {
         echo $i.", ";
         $i+=$step;
      }
   }

   function printNumber3($start, $end, $step){
      if ($start%2 !=0) {
         $fStart = $start+1;
      }else {
         $fStart = $start;
      }
      $i=$fStart;
      do {
            echo $i.", ";
            $i+=$step;
      } while ($i<=$end);
   }

   printNumber1(1,10,1);
   printNumber2(2,20,2);
   printNumber3(3,30,3);

?>
