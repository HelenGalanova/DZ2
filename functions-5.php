<?php
function task1($arr, $second = TRUE)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo "<p>" . $arr[$i] . "</p>";
    }

    if ($second != TRUE) {
        $stringString = implode(".", $arr);
        return $stringString;
    }
}

?>

<?php
function task2($arr, $calc)
{
    echo implode($calc, $arr) . ' = ';
    $count = $arr[0];
    unset($arr[0]);
    foreach ($arr as $k => $item) {
        if ($k > 0) {
            switch ($calc) {
                case '-':
                    $count -= $item;
                    break;
                case '+':
                    $count += $item;
                    break;
                case '*':
                    $count *= $item;
                    break;
                case '/':
                    $count /= $item;
                    break;
            }
        } else {
            $count = $item;
        }
    }
    echo $count;
    echo '<br>';
}

?>

<?php
function task3($str)
{
    if (in_array($str, array('-', '+', '/', '*'))) {
        $arr = func_get_args();
        $a = $arr[0];
        task2($str, $arr);
    }
}

?>


<?php
function task4($x, $y)
{
    if ($x < 1 || $y < 1) {
        return null;
    }
    echo "<table border='1'>";
    echo "<tr>";
    for ($i = 1; $i <= $x; $i++) {
        for ($j = 1; $j <= $y; $j++) {
            $proizv = $i * $j . " ";
            echo "<td>" . $proizv . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    task4($x - 1, $y - 1);
}

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
        if ($FirstSymbol != $LastSymbol) {
            return FALSE;
        }
    }
    return TRUE;
}

function verifivator($r)
{
    if ($r == TRUE) {
        echo "Это палиндром";
    } else {
        echo "Это не палиндром";
    }
}

?>


<?php
/*Задание №6*/

$d = getdate();
foreach ($d as $key => $val) {
    $key = $val;
}

?>



<?php
 /*Задание №7 в Index.php*/

function task8($a)
{
    $fp = fopen($a, "r");
    if ($fp) {
        while (!feof($fp)) {
            $mytext = fgets($fp, 999);
            return $mytext;
        }
    } else echo "Ошибка при открытии файла";
    fclose($fp);
}


?>

<?php
function task9($a = 'anothertest.txt', $b = 'Hello again')
{
    $fp = fopen($a, "w");
    fwrite($fp, $b);
    fclose($fp);
    $fp = fopen($a, "r");
    if ($fp) {
        while (!feof($fp)) {
            $mytext = fgets($fp, 999);
            return $mytext;
        }
    } else echo "Ошибка при открытии файла";
    fclose($fp);

}

?>