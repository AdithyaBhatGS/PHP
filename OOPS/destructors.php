<?php 
// Destructor will be invoked at the end of the script
class Sample{
    function __construct(){
        echo "Constructor Invoked!<br>";
    }
    function __destruct(){
        echo "Destructor Invoked!";
    }
}
$obj1=new Sample();
echo "Hello! Welcome to programming!<br>";
?>