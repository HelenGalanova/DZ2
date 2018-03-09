<?php
require_once('function.php');


echo "<h2>Задание 6</h2>";
echo "<br>Выведите информацию о текущей дате в формате 31.12.2018 23:59<br>";
echo "<br>$d[mday].$d[mon].$d[year]" . " " . "$d[hours]" . ":" . "$d[minutes]<br>";
echo "<br>Выведите unixtime время соответствующее 24.02.2018 00:00:00.<br>";
echo "<br>$d[mday].$d[mon].$d[year]" . " " . "$d[hours]" . ":" . "$d[minutes]" . ":" . "$d[seconds]<br>";
echo "<br>";


echo "<h2>Задание 7</h2>";
$text = 'Карл у Клары украл Кораллы';
$regexp = '/К/u';
$result = preg_replace($regexp, ' ', $text);
echo $result;
echo "<br>";
$othertext = 'Две бутылки лимонада';
$regexp = '/Две/u';
$result = preg_replace($regexp, 'Три', $othertext);
echo $result;
echo "<br>";
echo "<br>";


echo "<h2>Задание 8</h2>";
echo task8('test.txt');
echo "<br>";
echo "<br>";

echo "<h2>Задание 9</h2>";
echo task9("anothertest.txt");
echo "<br>";
