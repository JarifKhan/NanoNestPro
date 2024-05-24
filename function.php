<?php
// // mysql connection
// require('database/DBcontroller.php');



// //db con obj

// $db = new \database\DBcontroller();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nanonest1";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}