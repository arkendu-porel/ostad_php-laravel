<?php
   function arraySorting($array) {
      rsort($array);
      print_r($array);
   }
   $grades = array(85, 92, 78, 88, 95);   
   arraySorting($grades);
?>