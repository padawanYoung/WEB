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
    $f = fopen('oblinfo.txt', 'r');
    $c = 1;
    $coef = 0;
    fgets($f);
    while (!feof($f)) {
        if ($_POST["city"] == $c) {
            echo "<tr>";
            echo "<td>", $c, "</td>";
            $s = fgets($f);
            echo "<td>", $s, "</td>";
            $Den = fgets($f);
            echo "<td>", $Den, "</td>";
            $Num = fgets($f);
            echo "<td>", $Num, "</td>";
            $coef = round((int)$Num / ((int)$Den / 100), 2);
            echo "<td>", $coef, "</td>";
            echo "</tr>";
            break;
        }
        fgets($f);
        fgets($f);
        fgets($f);
        $c++;
    }
    fclose($f);

    ?>
</table>
</body>
</html>
