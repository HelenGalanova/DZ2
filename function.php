<?php
$d = getdate();
foreach ($d as $key => $val) {
    $key = $val;
}

?>


<?php
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