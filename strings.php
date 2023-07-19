<?php

  $str = "this is str";

  echo $str;
  echo "<br>";
  $len = strlen($str);
  echo "The length of string is ". $len . " thank you";
  // echo $len;
  echo "<br>"; 
  echo "The words in string is ". str_word_count($str) . " thank you";

  echo "<br>"; 
  echo "The reverse string is ". strrev($str) . " thank you";

  echo "<br>"; 
  echo "The position of is in string is ". strpos($str, "is") . " thank you";

  echo "<br>"; 
  echo "The replaced string is ". str_replace("is", "at", $str) . " thank you";


?>