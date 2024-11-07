<?php
$fptr = fopen("myfile.txt","w");

$con = fread($fptr, filesize("myfiles.txt"));
echo "$con";

// fwrite($fptr, "This is another content.");
// fclose($fptr);

?>