<?php

function isArmstrong(int $number):bool{
    $sum = 0;
    $temp = $number;
    while($temp != 0){
        $rem = $temp % 10;
        $sum = $sum + ($rem*$rem*$rem);
        $temp = $temp / 10;
    }
    return $number == $sum;
}
$result = isArmstrong(153)?"Armstrong":"Not Armstrong";
echo $result.PHP_EOL;