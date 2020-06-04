<?php
   if(isset($_COOKIE['Name'])){
      $last = $_COOKIE['Name'];
      echo "Welcom back! <br> your name is ".$last;
   }
   else{
      echo "welcome to our site!";
   }
?>