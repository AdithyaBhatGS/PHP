<?php

// final keyword whenever used in a class:
// 1.We cannot inherit that class
// 2.We cannot override the methods of that class

// Make 'Continent' final to see the changes 
class Continent{
    function __construct(){
        echo "Continent Class Constructor!<br>";
    }
}

class Country extends Continent{
    function __construct(){
        echo "Country Class Constructor!<br>";
    }
}

$country=new Country();
?>