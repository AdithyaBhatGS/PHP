<?php
/*
Datatypes:Type of data one will going to store in containers

1)Scalar Types
2)Compound Types
3)Primitive Types

1)Scalar Types:

a)boolean
b)integer
c)float
d)string

2)Compound Types:

a)Object
b)Arrays

3)Special Types:

a)NULL
b)resource

var_dump(var)->returns value of the variable with type

*In case of strings and arrays it will also return the size

*/
?>

<?php
echo "---Boolean---" . "<br />";

$a=TRUE;
$b=FALSE;

echo var_dump($a) . "<br />";
echo var_dump($b) . "<br />";
?>

<?php
echo "---Integer---" . "<br />";

$num1=100;
$num2=-87;

echo $num1."<br />";

echo $num2."<br />";

echo $num1 . "+" . $num2 . "=" .$num1+$num2 . "<br />";

echo var_dump($num1+$num2)."<br />";

//Octal Number

//Int(012)=10

$num3=012;
//Int(0x12)=18

//A hexadecimal

$num4=0x12;

//To print its integer equivalent

echo $num3 . "<br />";
echo $num4 . "<br />";
?>

<?php

echo "---Float---" . "<br />";

$f1=10.223;
$f2=9.7664;

echo $f1."-".$f2."=".$f1-$f2 ."<br />";
echo var_dump($f1)."<br />";

?>

<?php

echo "---Strings---" . "<br />";

$str1="Hello World , ";
$str2="I am Cherry!";

echo "str1 = $str1"."<br />";
echo "str2 = $str2"."<br />";
echo var_dump($str1.$str2) . "<br />";

?>

<?php
echo "---NULL---" . "<br />";

$n_var=NULL;

echo var_dump($n_var);
?>