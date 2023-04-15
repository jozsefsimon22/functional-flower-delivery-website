<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to the database
$server = 'localhost';
$database = 'flower_delivery';
$username = 'root';
$password = '';

// Attempt to establish a connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    // If there is an error, display the error message and terminate the script
    die('Could not connect: ' . mysqli_connect_error());
}

// If the connection is successful, display a message or output HTML
echo "Connected successfully<br><br>";
?>