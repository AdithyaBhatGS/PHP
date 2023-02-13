<?php

/*

*Magic constants are those whose value changes.

*They are special constants

*/

?>
<?php
// 1)__LINE__:Returns the current line number
echo "__LINE__"."<br />";
echo "Hello I am Ravi Bishnoi!";

echo "Current line number : ".__LINE__."<br />";
?>

<?php
// 2)__FILE__:returns the current path
echo "__FILE__"."<br />";
echo "Current file location : ".__FILE__."<br />";

?>

<?php
// 3)__FUNCTION__:returns the name of the function(should be placed inside the function)

echo "__FUNCTION__"."<br />";

function Armstrong()
{
    echo "The function name is  : ".__FUNCTION__."<br />"; 
}
Armstrong();
?>

<?php

class Dog
{
    public function __construct(){
        echo "Method name : ".__METHOD__."<br />";
    }
    
    public function display(){
        echo "Method name : ".__METHOD__."<br />";

        echo "Class name : ".__CLASS__."<br />";

    }
};

$obj=new Dog();
$obj->display();
?>