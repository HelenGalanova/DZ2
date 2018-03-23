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
    $arr = func_get_args();
    unset($arr[0]);
    return task2($arr, $str);

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

