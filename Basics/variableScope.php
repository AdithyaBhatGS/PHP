<?php
/*
In PHP we have 3 scopes for a variable:
    1)Local 
    2)Global 
    3)Static

1)Local->When variables are within a function block

2)Global->When variables are outside function block

3)Static->A static variable have a local scope but its value will not be destroyed once a function call/block ends

It is used to preserve the value contained*/
?>

<?php
//Local Variable:
echo "---Local Variables---" . "<br />";
function display1()
{
    $num=100;
    echo $num . "<br />";
}
function display2()
{
    $num=200;
    echo $num . "<br />";
}
//echo $num->Error as it is in local scope
display1();
display2();
?>

<?php
//Global:
echo "---Global Variables---" . "<br />";
$name="Shero";

/*Error
Trying to access a global variable in local scope without keyword "global"

function display3()
{
    echo $name . "<br />";
}

display3()
*/

function display3()
{
    global $name;
    echo $name . "<br />";
}

display3();

//Can access global variable without "global" keyword in global scope

echo "<br />" . $name . "<br />";

?>

<?php
echo "---Static Variables---" . "<br />";
function use_of_static()
{
    static $s_count=97;
    $n_count=97;
    
    $s_count++;
    $n_count++;

    echo "Static : " . $s_count . "<br />";
    echo "Normal : " . $n_count . "<br />";

}


use_of_static();
use_of_static();
use_of_static();
use_of_static();

?>
