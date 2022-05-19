<?php
 $data1 = "Good Morning and have a good day!!";
 $wordsCount = str_word_count($data1);

 echo "the number of words are" .$wordsCount;
 echo "<br>";

 $data2 = "Good Morning and have a awesome day!!";
 $length = strlen($data2);
 echo "the lenght of string is" .$length ;
 echo "<br>";

 $data3 = "Hello World";
 $reverse = strrev($data3);
 echo 'the reverse of string is' .$reverse;

 echo"<br>";

 $data4 = "hello world";
 $data5 = "hello world";

 if (strpos($data4,$data5)!==false)
 {
     echo "Word found";
   
 }
 else{
     echo "Word Not Found";
 }
 ?>