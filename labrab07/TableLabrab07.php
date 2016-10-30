<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>labrab07</title>
    <link href='https://fonts.googleapis.com/css?family=Trochut:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="StyleLabrab07.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="heding2">
    <img src="logo.png" width="30%" height="30%" alt="">
</div>
<span class="heding">
<!--    <img src="https://www.allegorithmic.com/sites/default/files/maya-logo_2.png" width="10%" height="10%" alt="M">-->
    <span id="later">M</span>y  <span id="later">T</span>able
</span>
<?php
$servername = "localhost";
$username = "Serg94";
$password = 'passcode12';
$dbname = 'labrab07';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>
<div id = TABLE>
    <table id="pos">
        <tr style="font-weight: bold;">
            <td>№</td>
            <td>ID</td>
            <td>Lastname</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Date</td>
        </tr>
<?php
$sql = "SELECT id, Lastname, Name, Surname, Date FROM Customers";
$result = $conn->query($sql);
// output data of each row
$count = 1;
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo "<td>",$count++ ,"</td>";
        echo "<td>",$row['id'] ,"</td>";
        echo "<td>",$row['Lastname'] ,"</td>";
        echo "<td>",$row['Name'] ,"</td>";
        echo "<td>",$row['Surname'] ,"</td>";
        echo "<td>",$row['Date'] ,"</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "<a id='button' class='menu' href='FormLabrab07.php'>Go To Form</a>";
$conn->close();
?>
</body>
</html>