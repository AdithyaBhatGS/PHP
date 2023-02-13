<?php

function default_args($n1="Hritik",$n2="Asin"){
    echo $n1." ";
    echo $n2."<br />";
}
default_args();//both will be default
default_args("Akshay");//second one will be default
default_args("Samarth","Sahana");

?>