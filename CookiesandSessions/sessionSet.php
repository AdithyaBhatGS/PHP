<?php

    // Time spent on an activity -> session

    // From the time user entered the app to the time he leaves from it will be 1 session

    // Session info will always be stored on server end

    // A session helps by storing the data of the client across the webpages

    // To travel from one page to another client should make http request which is a stateless protocol
    
    // Imagine you're on one webpage in instagram and to go to another webpage on the same site if it again asks your username and password?

    // Here sessions will help by storing the data on the server

    //Starting a session

    session_start();

    echo "Session started successfully!<br>";
    
    $_SESSION["username"]="Manjunath";
    $_SESSION["gender"]="male";
    $_SESSION["place"]="Karnataka";

?>