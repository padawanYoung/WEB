<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
header('Content-type: text/html; charset=c1251');
require_once 'simple_html_dom.php';

$html = file_get_html("http://www.cvk.gov.ua/pls/vp2014/wp003?PT001F01=702");

echo $html->find('td.td10', 2) . ": ";
echo $html->find('td.td2', 2) . '<br>';

$count = 0;
$Names = array();

foreach ($html->find('.td3 a.a1') as $a) {
    $Names[$count++] = $a->plaintext;
}
$count = 0;
$info = array();
foreach ($html->find('.td2') as $arr)
    $info[$count++] = $arr->plaintext;

$count = 0;
for ($i = 4; $i < count($info); $i++) {
    if (($i % 2 == 1)) continue;
    echo "<table>";
    echo "<tr>";
    echo "<td id='names'>" . $Names[$count++] . "</td>";
    echo "<td id='biog'>" . $info[$i] . "</td>";
    echo "<tr>";
    echo "</table>";
    if ($count > 20) break;
}
?>
</body>
</html>