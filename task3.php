
<?php
function task3($str)
{
        if(in_array($str, array('-','+','/','*')))
        {
        $arr = func_get_args();
            $a = $arr[0];
            task2($str, $arr)
            
        }    
}
echo task3($arr);
echo "<br>";
echo "<br>";
?>

