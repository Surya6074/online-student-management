<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$dbname = "test";

//create connection detail
$conn = new mysqli($servername, $serverusername, $serverpassword, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
