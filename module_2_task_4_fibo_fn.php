<?php
   function printFibonacci($range)
   {
      $first = 0;
      $second = 1;
      echo $first.", ".$second.", ";  
      for($i = 2; $i < 15; $i++) {  
      $third = $first + $second;
      echo $third.", ";
      $first = $second;
      $second = $third;
      }
   }
   printFibonacci(6);
?>