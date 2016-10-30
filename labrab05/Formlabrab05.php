<!DOCTYPE html>
<html>
<head>

    <title>labrab05</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 10px;
        }
        #pos {
            margin: auto;
        }
    </style>
</head>
<body lang="ru">
    <table id="pos">
        <tr style="font-weight: bold;">
            <td>Ном.</td>
            <td>Область</td>
            <td>Население тыс.</td>
            <td>Числовузов</td>
            <td>Число вузов на 100 тыс. населения</td>
        </tr>
<?php
    $f=fopen('oblinfo.txt','r');
    $c=1;
    $coef = 0;
	fgets($f);
while (!feof($f)) {
    $s = fgets($f);
    $Den = fgets($f);
    $Num = fgets($f);
    $coef = round((int)$Num / ((int)$Den / 100), 2);
    $c++;
    if ($_POST["coef"] >= $coef) {
        echo "<tr>";
        echo "<td>", $c, "</td>";
        echo "<td>", $s, "</td>";
        echo "<td>", $Den, "</td>";
        echo "<td>", $Num, "</td>";
        echo "<td>", $coef, "</td>";
        echo "</tr>";
    }
}
    fclose($f);

?>
    </table>
</body>
</html>


