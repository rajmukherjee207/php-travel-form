<?php
$server = "localhost";
$username = "root";
$password = "";

// Create a connection
$con = mysqli_connect($server, $username, $password);

// Check connection
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Success connecting to the DB";
}
?>


/*
$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server, $username, $password);
if(!$con){echo "Success connecting to the db";} */
