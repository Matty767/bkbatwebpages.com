<?php 

//Create connection

$conn = mysqli_connect("localhost", "root","","events");


// check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());}

?>