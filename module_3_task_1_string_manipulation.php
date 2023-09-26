<?php
   $text = "The quick brown fox jumps over the lazy dog.";
   $textNew = str_replace("brown", "red", strtolower($text));
   echo $textNew;
?>