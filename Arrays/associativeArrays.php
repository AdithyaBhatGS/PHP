<?php

// Associative arrays contains key,value pairs where user should specify the key along with value

//We can create mixed type associative arrays
$groceries=array("Tomato"=>"1kg","Potato"=>"0.5kg","Banana"=>"1kg","Ragi"=>"1kg","Jaggery"=>"1kg");

echo $groceries["Tomato"]."<br />";
echo $groceries["Potato"]."<br />";
echo $groceries["Banana"]."<br />";
echo $groceries["Ragi"]."<br />";
echo $groceries["Jaggery"]."<br />";

// printing through print_r()

echo "------------------<br />";
print_r($groceries);
//Use of var_dump()
echo "<br />------------------<br />";
var_dump($groceries);
echo "<br />------------------<br />";


// printing through loop
echo "Loop Starts:"."<br>";
foreach($groceries as $key=>$value){
    echo "Key->".$key." | Value->".$value."<br>";
}
?>
