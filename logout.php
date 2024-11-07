<?php
session_start();

if(isset($_SESSION["username"]))
{
    echo "Welcome user : " .$_SESSION["username"] . "<br>";
    echo "Your role is : " .$_SESSION["role"];
}
else{
    echo "You are not logged in";
}

// session_unset();

// session_destroy();

// echo "You have logged out of the page.";
?>