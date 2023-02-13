<!-- RUN 3SESSION FILES SIMULTANEOUSLY TO UNDERSTAND -->
<?php

    // Getting the Session details

    // start the already exisisting session
    session_start();

    if($_SESSION["username"]){
        echo "Session details:<br>";
        echo "Name:".$_SESSION["username"]."<br>";
        echo "Gender:".$_SESSION["gender"]."<br>";
        echo "Place:".$_SESSION["place"]."<br>";
    }
    else{
        echo "Please login !";
    }
?>