<?php
require_once('functions.php');

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




echo "<h2>Задание 3</h2>";
echo task3("+", 1, 2, 3, 4);
echo "<br>";
echo "<br>";



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

?>
