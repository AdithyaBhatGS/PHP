<?php

$a=TRUE;
$b=FALSE;

echo "TRUE or FALSE : ";
echo var_dump($a || $b)."<br />";
echo "TRUE and FALSE : ";
echo var_dump($a && $b)."<br />";
echo "not TRUE : ";
echo var_dump(!$a)."<br />";
echo "TRUE xor FALSE : ";
echo var_dump($a xor $b)."<br />";

?>