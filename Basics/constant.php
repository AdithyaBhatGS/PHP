<?php
//If we make a variable constant then it's value cannot be changed

//Scope of constant variable will be global

//This will be Error: 
// const num1=100;
// num1=200;
// echo num1;

//1)Method 1

//If you use "const" to declare a constant the it should always be declared in the global scope

const num1=100;
echo num1."<br />";

//2)Method 2 using define(varname,value):

//If we use define to declare a constant then even inside the function we can declare them and they will have global scope

define("num2",1000);
define("str1","Hello i am Jenny");

echo num2."<br />";
echo str1."<br />";

// Scope:
const num3=100;
// Declaring a const var inside a fun is 
function fun(){
    define("num4",10001);
    echo num3."<br />";
}
fun();
echo num3."<br />";
echo num4."<br />";
?>