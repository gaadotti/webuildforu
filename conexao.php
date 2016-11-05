<?php
$conn = mysqli_connect("db4free.net","mavima","tumbalatum","webuildingforu");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>