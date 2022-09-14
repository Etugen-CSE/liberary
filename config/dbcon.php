<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "book";

// create database connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
// check database connection
if (mysqli_connect_error()) {
    echo "failed to connect";
    exit();
} else {
    echo "connect";
}
