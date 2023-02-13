<?php 
// include('path')=>this will be used to include the files whichever we need
// include is basically an expression in PHP
// It will throw an E_WARNING if included file is not found

// It will not stop the program execution but will throw a warning

include('sample1.php');
// Trying to include a non-existent file
include('sample10.php');
include('sample2.php');
include('sample3.php');

echo "Hello World!<br>";
?>