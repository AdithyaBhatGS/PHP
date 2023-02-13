<?php

// Acess modifiers->The area where we can use a variable/method

// By default->public 

// public,private,protected

class Person{
    public $name;
    protected $age;
    private $salary;

    function __construct(){
        echo "Constructor invoked!";
    }
}
$p1=new Person();
$p1->name;
$p1->age;//Cannot set the value for protected type
$p1->salary;//Cannot set the value for private type
?>