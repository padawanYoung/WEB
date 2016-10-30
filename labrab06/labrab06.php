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

</head>
<body class="cloud">
<?php
echo "<div><img src=\"http://ukrexcurs.com/_dr/2/57951882.png\" alt=\"logo\"></div>";
header("Content-Type: text/html;charset=utf-8");
echo "<div>";
echo "<h>Выберите область:</h>";
echo "<form action=\"labrab062.php\" method=\"POST\">";
echo "<select name=\"city\">";
        $f = fopen('oblinfo.txt', 'r');
        $i=1;
        fgets($f);
        while (!feof($f)) {
            $s = fgets($f);
            fgets($f);
            fgets($f);
            echo "<option value=". $i++ .">";
            echo $s;
            echo "</option>";
        }
        fclose($f);
echo "</select>";
echo "<input type=\"submit\">";
echo "</form>";
echo "</div>";


