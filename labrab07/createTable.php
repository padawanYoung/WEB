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
// sql to create table
$sql = "CREATE TABLE Customers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Lastname VARCHAR(20)NOT NULL,
    Name VARCHAR(20) NOT NULL ,
    Surname VARCHAR(20) NOT NULL ,
    Date VARCHAR (10)
    )DEFAULT CHARACTER SET utf8 COLLATE utf8_bin";

if ($conn->query($sql) === TRUE) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>