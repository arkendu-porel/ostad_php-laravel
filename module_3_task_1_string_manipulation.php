<?php
   function stringManipulate($string) {
      $textNew = str_replace("brown", "red", strtolower($string));
      echo $textNew;
   }

   $text = "The quick brown fox jumps over the lazy dog.";
   stringManipulate($text);
?>
