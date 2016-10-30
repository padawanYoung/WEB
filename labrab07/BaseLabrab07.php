<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>labrab07</title>
    <link href='https://fonts.googleapis.com/css?family=Trochut:400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="StyleLabrab07.css">
</head>
<body>
<div class="heding2">
    <img src="logo.png" width="30%" height="30%" alt="">
</div>
<span class="heding">
<!--    <img src="https://www.allegorithmic.com/sites/default/files/maya-logo_2.png" width="10%" height="10%" alt="">-->
    <span id="later">M</span>y  <span id="later">B</span>ase
</span>

<div class="form">
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

    $Last = $_POST['LastName'];
    $Name = $_POST['Name'];
    $Sur = $_POST['Surname'];
    $Date = $_POST['Date'];

    $sql = "SELECT id, Lastname, Name, Surname, Date FROM Customers";
    $result = $conn->query($sql);
    $flag = false;
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        if (($row["Lastname"] == $Last) && ($row["Name"] == $Name) && ($row["Surname"] == $Sur)) {
            $sql = "UPDATE Customers SET Date = '$Date' WHERE id = $id";
            $flag = true;
            if ($conn->query($sql) === TRUE) {
                echo "Information from the id", $id, "in the database has been successfully updated <br>";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }
    }
    if ($flag == false) {
        $sql = "INSERT INTO Customers ( Lastname, Name, Surname, Date)
                VALUES ('$Last' , '$Name', '$Sur', '$Date')";
        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            echo "New record created successfully! <br> Last inserted ID is: " . $last_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    echo "<a id='button' href='FormLabrab07.php'>Repeat</a>";
    echo "<a id='button' href='TableLabrab07.php'>Show table</a>";
    ?>
</div>
</body>
</html>