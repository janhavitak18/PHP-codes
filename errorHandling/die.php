<?php
if(file_exists("mytestfile.txt")){
    $file =fopen("mytestfile.txt","r");
    $con = fread($file,filesize("mytestfile.txt"));
    // fclose($file);
    echo $con;
}
else{
    die("Error: The file does not exist.");
}

?>