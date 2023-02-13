<?php

function factorial($num){

    if ($num==0 || $num==1){
        return 1;
    }
    return $num*factorial($num-1);
}

echo "Factorial of 6 : ".factorial(6)."<br />";
?>