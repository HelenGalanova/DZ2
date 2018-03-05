<?php
$strings = 'Режиссер Джеймс Ганн раскрыл тайну об одном из персонажей «Стражей Галактики», сообщает Business Insider. Все началось с дискуссии в интернете, посвященной тому, кого пользователи предпочли бы спасти — Грута из «Стражей Галактики» или порга из «Звездных войн»';
$arrayStrings = explode(".", $strings);
function task1($arr, $second = TRUE)
{

    if ($second == TRUE) {
        for ($i = 0; $i < count($arr); $i++) {
            echo "<p>" . $arr[$i] . "</p>";
        }
    } else {
        $stringString = implode(".", $arr);
        return $stringString;
    }
}

task1($arrayStrings);
echo "<br>";

echo task1($arrayStrings, FALSE);
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php

echo "<br>";

$integ = array(10, 5, 1);
$operator = "+";

function task2($operator, $arr)
{
    $rez1 = "Результат = ";
    $rez2 = 0;


    for ($i = 0; $i < count($arr); $i++) {
        if ($operator == "-") {
            $rez2 -= $arr[$i];

            $rez3 = $arr[$i] . $operator;
            $rez4 .= $rez3;
        } elseif ($operator == "+") {
            $rez2 += $arr[$i];

            $rez3 = $arr[$i] . $operator;
            $rez4 .= $rez3;

        }
    }


    $rez = $rez1 . $rez4 . "=" . $rez2;
    echo $rez;
}

task2($operator, $integ);
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
function task3()
{

    for ($i = 0; $i < 2; $i++) {
        if ($i == 0) {
            $deistv = func_get_arg($i);
        } else {

            $someAct = func_num_args(1);
            $primer = '';
            if ($deistv == '+') {
                echo "Сложение<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct + func_get_arg($j);
                    if ($j == 1) {
                        $primer = func_get_arg(1);
                    } else {
                        $primer = $primer . '+' . func_get_arg($j);
                    }
                }
                echo $primer . "=" . $someAct . "<br>";
            } elseif
            ($deistv == '-') {
                echo "Вычитание<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct - func_get_arg($j);
                    if ($j == 1) {
                        $primer = func_get_arg(1);
                    } else {
                        $primer = $primer . '-' . func_get_arg($j);
                    }
                }
                echo $primer . "=" . $someAct . "<br>";
            } elseif ($deistv == '*') {
                echo "Умножение<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct * func_get_arg($j);
                    if ($j == 1) {
                        $primer = func_get_arg(1);
                    } else {
                        $primer = $primer . '*' . func_get_arg($j);
                    }
                }
                echo $primer . "=" . $someAct . "<br>";
            } elseif ($deistv == '/') {
                echo "Деление<br>";
                for ($j = 1; $j < func_num_args(); $j++) {
                    $someAct = $someAct / func_get_arg($j);
                    if ($j == 1) {
                        $primer = func_get_arg(1);
                    } else {
                        $primer = $primer . '/' . func_get_arg($j);
                    }
                }
                echo $primer . "=" . $someAct . "<br>";
            } else {
                echo "Неизвестная операция<br>";
            }
        }
    }
}

echo "<br>";
echo task3("+", 8, 8, 15, 16, 23, 42, 84, 186);
echo task3("-", 1, 2, 3, 5.2);
echo task3("*", 1, 2, 3, 5.2);
echo task3("/", 1, 2, 3, 5.2);
echo task3(".", [1,2,3]);
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
function task4($a)
{
    if (!intval($a) or $a < 1 or !preg_match('/^\+?\d+$/', $a)) {
        return 'NOT ok';
    } else {
        return 'ok';
    }
}

function multiplicationTable($x, $y)
{
    if (task4($x) == 'ok' and task4($y) == 'ok') {
        echo "<table border='1'>";

        echo "<tr>";
        for ($i = 1; $i <=$x; $i++) {
            for ($j = 1; $j <=$y; $j++) {
                $proizv = $i * $j . " ";
                echo "<td>" . $proizv . "</td>";
            }
            $j = 1;
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Один из параметров введён неверно";

    }
}
echo "<br>";
echo multiplicationTable(1, 1);
echo "<br>";
echo multiplicationTable(2, 2);
echo "<br>";
echo multiplicationTable(3, 3);
echo "<br>";
echo multiplicationTable(4, 4);
echo "<br>";
echo multiplicationTable(5, 6);
echo "<br>";
echo multiplicationTable(6, 6);
echo "<br>";
echo multiplicationTable(7, 7);
echo "<br>";
echo multiplicationTable(8, 8);
echo "<br>";
echo multiplicationTable(89, -31);
echo "<br>";
echo "<br>";
?>


<?php
function task5($text)
{
    $WithoutSpace = str_replace(" ", "", $text);
    $SmallText = mb_strtolower($WithoutSpace);
    $length = mb_strlen($SmallText);
    $halfLength = floor($length / 2);
    for ($i = 0; $i <= $halfLength; $i++) {
        $FirstSymbol = mb_substr($SmallText, $i, 1);;
        $LastSymbol = mb_substr($SmallText, $length - 1 - $i, 1);;
        if ($FirstSymbol == $LastSymbol) {
           return ($a < 1);
        } 
    }

}

function verifivator($r)
{
    if ($r == TRUE) {
        echo "Это палиндром";
    } else {
        echo "Это не палиндром";
    }
}

echo "<br>";
echo verifivator(task5('А роза упала на лапу Азора'));
echo "<br>";
echo verifivator(task5('Мама мыла раму'));
echo "<br>";
?>
