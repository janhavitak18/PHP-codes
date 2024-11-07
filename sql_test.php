<?php
$servername ="Localhost";
$username="root";
$password="fhdd";

$conn = mysqli_connect($servername, $username, $password);

// echo "connection successsful";
if(!($conn))
{
    die("connection failed" . mysqli_connect_error());
}
else
{
    echo "Connection Succcessful";
}

$sql = "CREATE DATABASE sql_test";
mysqli_query($conn, $sql);

?>