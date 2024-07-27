<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "newphp";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn) {
    // echo ("Done");
} else {
    die ("something went wrong");
}
?>