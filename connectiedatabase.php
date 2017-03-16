<?php

# Van de tutorial connectie
/*

$conn = @mysqli_connect("localhost", "root", "usbw", "webserver");

if (!$conn) {
    die("Connectie mislukt: ".mysqli_connect_error());
    
}

*/


// Create connection
$conn = new mysqli("localhost", "root", "usbw", "webserver");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}