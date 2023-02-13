<?php

$names=array(101=>"Ram",102=>"Laxman",103=>"Arjun",104=>"Karna");

// To check if there is value for a key:
if (isset($names["Bheema"])){
    echo "Exists<br />";
}
else {
    echo "Does not Exist!<br />";
}

// To get list of keys in the names array

print_r(array_keys($names));

echo "<br />";

// To get list of values in the names array

print_r(array_values($names));

// Sort names array :

echo "<br />Before Sorting : <br />";
foreach($names as $key=>$val)
{
    echo $key."=>".$val."<br />";
}

//sort()
sort($names);

// But the keys are changed in the result!

echo "After Sorting : <br />";
foreach($names as $key=>$val)
{
    echo $key."=>".$val."<br />";
}

// reverse an array:
echo "<br /><br />";
print_r($names);
echo "<br /><br />";
print_r(array_reverse($names));
echo "<br /><br />";

// To get the size of the array:
count($names);
?>