<?php

// require('path')=>this will be used to include the files whichever we need

// It will throw an E_COMPILE_ERROR if included file is not found

// require will basically stop the execution itself

require('sample1.php');
require('sample2.php');
require('sample10.php');
require('sample3.php');

echo "Hello World!<br>";
?>