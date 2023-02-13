<?php

//Common String functions:

$str="Ranchal is a good girl!";

echo $str."<br />";

//To find the length of string

echo "Length of $str is:".strlen($str)."<br />";

//To find the word count of string

echo "Number of words in $str is:".str_word_count($str)."<br />";

//To find the reverse of string

echo "Reverse : ".strrev($str)."<br />";


//Replacing a substring
$str1="Ranchal is good in Math,Physics! Ranchal has good artistic skills!";

echo str_replace("Ranchal","Jhansi",$str1)."<br />";

//Getting the position of a substring

echo strpos($str1,"artistic");
?>