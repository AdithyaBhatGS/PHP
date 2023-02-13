<?php

class Person{
    // Constructor is a special method that gets invoked when object is created
    function __construct(){
        echo "Hello!<br>";
    }
}

$p1=new Person();
$p2=new Person();
?>