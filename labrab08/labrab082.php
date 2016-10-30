<!DOCTYPE html>
<html>

<head>
    <title>labrab05</title>
    <style>
        .cloud {
            background-image: url("http://widewallpaper.info/wp-content/uploads/2016/02/white-cloud-wallpaper.jpg");
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 10px;
            background: papayawhip;
        }

        #pos {
            margin: auto;
        }
    </style>
</head>
<body lang="ru" class="cloud">
<table id="pos">
    <tr style="font-weight: bold;" id="top">
        <td>Ном.</td>
        <td>Область</td>
        <td>Население тыс.</td>
        <td>Числовузов</td>
        <td>Число вузов на 100 тыс. населения</td>
    </tr>
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

    $sql = "SELECT name, nasel,vuzy,srednij FROM oblasti";
    $result = $conn->query($sql);
    $count = 1;
    while ($row = $result->fetch_assoc()) {
        if ($_POST["city"] == $count) {
            echo "<tr>";
                echo "<td>", $count++, "</td>";
                echo "<td>", $row['name'], "</td>";
                echo "<td>", $row['nasel'], "</td>";
                echo "<td>", $row['vuzy'], "</td>";
                echo "<td>", $row['srednij'], "</td>";
            echo "</tr>";
        }
        $count++;
    }
    $conn->close();
    ?>
</table>
</body>
</html>
