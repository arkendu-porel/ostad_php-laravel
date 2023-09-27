<?php
   function arrayManipulation($array) {
      foreach ($array as $key => $value) {
         if ($value%2 == 0) {
            unset($array[$key]);
         }
      }
      $newArray = array_values($array);
      print_r($newArray);
   }
   $numbers = [1,2,3,4,5,6,7,8,9,10];
   arrayManipulation($numbers);
?>