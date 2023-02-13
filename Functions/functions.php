<?php

/*functions:A block of code that can be reused.

*A function can be user defined or built in.

*It can be call by value,call by reference,recursive also can have default arguments within it.

*/
?>

<?php
/*Function without parameter*/
function _2023(){
    echo "Welcome to 2023!<br />";
}
_2023();
?>

<?php

/*Function with parameter:*/ 

function add($n1=100,$n2=200){
    echo $n1."+".$n2."=".($n1+$n2)."<br />";
}

$num1=10;
$num2=20;
add($num1,$num2);

?>