<?php
// Etablerar databas koppling
// Host,username,password databas.
$con = mysqli_connect("127.0.0.1","root","pass","test");
    if (mysqli_connect_errno()){
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 die();
 }
?>