<?php

$stu_names_class10=array("Vikram","Ashok","Ramesh","Supreeth");

// Iterating an indexed array through foreach:

echo "Class 10 Students List : <br />";
foreach($stu_names_class10 as $val){
    echo $val."<br />";
}

$groceries=array("Tomato"=>"1kg","Potato"=>"0.5kg","Banana"=>"1kg","Ragi"=>"1kg","Jaggery"=>"1kg");

echo "<br />Groceries List : <br />";
foreach($groceries as $key=>$val){
    echo $key."=>".$val."<br />";
}

?>