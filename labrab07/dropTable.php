<?php
$servername = "localhost";
$username = "Serg94";
$password = 'passcode12';
$dbname = 'labrab07';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE Customers";
if ($conn->query($sql) === TRUE) {
    echo "Table Customers Delleted!";
} else {
    echo "Error delleting  table: " . $conn->error;
}