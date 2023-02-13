<?php
function sampleStr(&$str){
    $str.=" in Varanasi!";
}

$s="I am ";
echo "Before:".$s."<br />";
sampleStr($s);
echo "After:".$s;

?>