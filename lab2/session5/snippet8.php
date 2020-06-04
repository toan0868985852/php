<?php
   $num2 = 0;
   echo "the multiplication value of 14 * 15 <br>";
   function multiply()
   {
      $num1 = 14;
      $num2 = 15;
      $num2=$num1 * $num2;
      echo $num2; 
   }
   multiply();
   echo "<br> the value or the local variable on exiying the function is <br>";
   echo $num2;
?>