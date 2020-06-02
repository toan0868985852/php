<?php
   class greetings{
      private $word = "hello";
   }
   $closure = function($word){
      echo "$this->word $word"."<br/>";
   };

   $obj = new greetings();
   $closure->call($obj, 'john');
   $closure->call($obj, 'kevin');
?>