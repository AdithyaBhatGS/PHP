<?php 
    echo "Welcome to Cookies tutorial!<br>";

    // Cookies are plain text files that are created by server and stored in client's computer 

    // One should never store important info like passwords,credit card numbers inside cookies.

    //Purpose:
    /*
    a)Cookies are basically used to store login info so that you don't want to login each time
    
    b)Cookies are used to provide personalization like, 
    ->Displaying your favrouite news category 
    ->Saving cart info 
    
    c)It will also keep track of each user session on the website

    d)Cookies are normally stored on client side there by reducing the server storage cost 
    */

    // Setting a cookie

    // setcookie(name,value,time,path where it should be available,domain,security)

    // if you set time=0 then it will be a session cookie

    // time()=returns the total seconds since 1jan 1970

    // path="/" means its available throught the directory you're working with

    setcookie("Category","flipkartPlus",time() + 60*60*24,"/cookies.php/");

    // To check wheather cookie have been set or not
    if(isset($_COOKIE["Category"])){
        echo $_COOKIE["Category"]."<br>";
    }
    else{
        echo "No cookies exist! <br>";
    }

    // Printing super global array $_COOKIE     
    // print_r($_COOKIE);
    // echo "<br />";

    // To destroy a cookie simply set the time to already passed time value
    setcookie("Category","",time()-100);
    
    echo "Cookie has been destroyed!";
?>