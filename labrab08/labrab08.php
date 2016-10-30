<html>
<head>
    <style>
        .cloud{
            background-image: url("http://widewallpaper.info/wp-content/uploads/2016/02/white-cloud-wallpaper.jpg");
        }
        img {
            widht: 50%;
            height: 50%;
        }
        div {
            margin-left: 30%;
        }
        h, select {
            margin-left: 8%;
        }
    </style>
    <?php
    header('Content-type: text/html; charset=UTF8');
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
</head>
<body class="cloud">
<?php
echo "<div><img src=\"http://ukrexcurs.com/_dr/2/57951882.png\" alt=\"logo\"></div>";
header("Content-Type: text/html;charset=utf-8");
echo "<div>";
echo "<h>Выберите область:</h>";
echo "<form action=\"labrab082.php\" method=\"POST\">";
echo "<select name=\"city\">";

$sql = "SELECT name, nasel,vuzy,srednij FROM oblasti";
$result = $conn->query($sql);
$count = 1;
while ($row = $result->fetch_assoc()) {
    echo "<option value=",$count++,">",$row['name'],"</option>";
}
$conn->close();
echo "</select>";
echo "<input type=\"submit\">";
echo "</form>";
echo "</div>";


