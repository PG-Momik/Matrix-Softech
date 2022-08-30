<?php
function swap(&$num1, &$num2):void{
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$a = 5;
$b = 6;

swap($a, $b);

echo $a."\n";
echo $b."\n";