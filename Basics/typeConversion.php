<?php

// Type conversion -> settype(var_name,"datatypr");

$num1=10;
echo var_dump($num1)."<br>";

settype($num1,"string");
echo var_dump($num1)."<br>";

settype($num1,"bool");
echo var_dump($num1)."<br>";

settype($num1,"array");
echo var_dump($num1)."<br>";

settype($num1,"integer");
print_r($num1)."<br>";

settype($num1,"object");
echo var_dump($num1)."<br>";

?>
