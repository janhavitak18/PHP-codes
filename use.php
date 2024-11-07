<?php
session_start();
echo "Welcome user : " . $_SESSION["username"] ."<br>";
echo "Your role is : " . $_SESSION["role"];
?>