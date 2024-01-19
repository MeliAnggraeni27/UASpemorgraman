<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pemograman3";

// Create connection
$koneksi = new mysqli($host, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}
?>
