<?php
//By default they have keys assigned and they start with 0

//To create arrays use array() function

// Declaring and initializing
$stu_names_class10=array("Vikram","Ashok","Ramesh","Supreeth");

// We can also do:

// $stu_names_class10=array();
// $stu_names_class10[0]="Vikram";
// $stu_names_class10[1]="Ashok";
// $stu_names_class10[2]="Ramesh";
// $stu_names_class10[3]="Supreeth";

// We can also do:
// $stu_names_class10=["Vikram","Ashok","Ramesh","Supreeth"];


//Printing values indivdually:

echo $stu_names_class10[0].",".$stu_names_class10[1].",".$stu_names_class10[2].",".$stu_names_class10[3].","."<br />";

//Use of print_r()
echo "------------------<br />";
print_r($stu_names_class10);

//Use of var_dump()
echo "<br />------------------<br />";
var_dump($stu_names_class10);
?>