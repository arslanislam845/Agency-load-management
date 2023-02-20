<?php
// // database Connection
// // This line is establishing a connection to a MySQL database
// $hostname = "localhost";
// $username = "root";
// $password = "";
// // $db =  "";
// $conn = new mysqli($hostname,$username,$password);

// // Check for connection errors

// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// // Start a new session
// session_start();

// // Turn on error reporting
// error_reporting('1');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newload";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}



?>
