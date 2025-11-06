<?php
    // Strings in PHP
    $str1 = "This is a string";
    echo $str1. "<br>";
    $len = strlen($str1);
    echo "The length of the string is: ". $len. ". Thank you <br>";
    echo "The number of words in this string is: ". str_word_count($str1). ". Thank you <br>";
    // echo $len;
    // echo "<br>";
    echo "The reverse of the string is: ". strrev($str1). ". Thank you <br>";
    echo "The position of the string 'is' is: ". strpos($str1, "is"). ". Thank you <br>";
    echo "The replace string is: ". str_replace("string", "car", $str1). ". Thank you <br>";
   
 ?>   