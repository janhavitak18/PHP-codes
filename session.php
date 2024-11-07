<?php
session_start();

$_SESSION["username"] = "JhonDoe";
$_SESSION["role"] = "admin";
echo " Session started, Username is: " .$_SESSION["username"]. " , Role is: " .$_SESSION["role"]. "<br>";

print_r($_SESSION);
unset($_SESSION["username"]);

print_r($_SESSION);

session_unset();

session_destroy();

if (empty($_SESSION)) {
    echo "Session variables are noe cleared and the session is destroyed. ";

}
else{
    echo "Session is still active. ";
}

?>