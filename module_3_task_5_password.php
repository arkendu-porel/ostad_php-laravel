<?php
   function generatePassword($length) {
      $l = str_shuffle("abcdefghjkmnpqrstuvwxyz");
      $u = str_shuffle("ABCDEFGHJKMNPQRSTUVWXYZ");
      $n = str_shuffle("0123456789");
      $s = str_shuffle("!@#$%^&*()_+)");
      $string = str_shuffle($l.$u.$n.$s);
      $password = substr($string, 0, $length);
      echo $password;
   }
   
   generatePassword(12);
?>