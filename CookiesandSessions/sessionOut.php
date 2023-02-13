<?php

    // start
    session_start();

    // unset all the variables
    session_unset();

    // close the session
    session_destroy();

    echo "Logged out successfully!<br>";

?>