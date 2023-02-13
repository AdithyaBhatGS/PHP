<?php

function callByValue($var){
    $var+=230;
}
$num=113;
callByValue($num);
echo $num."<br />";
?>