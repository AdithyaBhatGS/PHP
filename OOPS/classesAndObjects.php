<?php

echo "Welcome to OOPS in PHP<br>";
echo "-----------------<br>";
// Creating a class
/*
Syntax:
 
class class_name{
    code;
}
*/

// By default all the data members are public in php

// Fruit template
class Fruit{
    public $name;
    public $weight;

    public function display($name,$weight){
        echo "Name:".$name."<br>";
        echo "Weight:".$weight."<br>";
        echo "-----------------<br>";
    }
}

// Creating 2 instances of Fruit
$val1=new Fruit();

$val2=new Fruit();

// Initializing the data members
$val1->name="papaya";
$val1->weight="345gms";

$val2->name="pomogranete";
$val2->weight="234gms";

// Calling the display method
$val1->display($val1->name,$val1->weight);
$val2->display($val2->name,$val2->weight);
?>