<?php
   $month = 86400 + time();
   setcookie('Name', 'Jerry', $month);
   echo "the cookie has been set";
?>