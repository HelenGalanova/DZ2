<?php
require_once('functions-3.php');

echo "<h2>Задание 1</h2>";
$strings = 'Режиссер Джеймс Ганн раскрыл тайну об одном из персонажей «Стражей Галактики», сообщает Business Insider. Все началось с дискуссии в интернете, посвященной тому, кого пользователи предпочли бы спасти — Грута из «Стражей Галактики» или порга из «Звездных войн»';
$arrayStrings = explode(".", $strings);
echo task1($arrayStrings, FALSE);
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h2>Задание 2</h2>";
echo "<p>", task2(array(1, 2, 3, 4), '+'), "</p>";
echo "<p>", task2(array(1, 2, 3, 4), '-'), "</p>";
echo "<p>", task2(array(1, 2, 3, 4), '*'), "</p>";
echo "<p>", task2(array(1, 2, 3, 4), '/'), "</p>";
echo "<br>";
echo "<br>";


/*echo "<h2>Задание 3</h2>";
echo "<br>";
echo "<p>", task3();       /* Не знаю, что нужно поставить в скобках, чтобы echo выводило task3 на экран.
echo "<br>";
echo "<br>"; */


echo "<h2>Задание 4</h2>";
echo task4(1, 1);
echo "<br>";
echo task4(2, 2);
echo "<br>";
echo task4(3, 3);
echo "<br>";
echo task4(4, 4);
echo "<br>";
echo task4(5, 5);
echo "<br>";
echo task4(6, 6);
echo "<br>";
echo task4(7, 7);
echo "<br>";
echo task4(8, 8);
echo "<br>";
echo "<br>";


echo "<h2>Задание 5</h2>";
echo verifivator(task5('А роза упала на лапу Азора'));
echo "<br>";
echo verifivator(task5('Мама мыла раму'));
echo "<br>";
return TRUE;


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

?>
