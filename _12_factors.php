<?php
function getFactors(int $number):array{
    $factorList = array();
    for($i=1;$i<=($number/2);$i++){
        if($number % $i == 0){
            $factorList[] = $i;
        }
    }
    $factorList[] = $number;
    return $factorList;
}

$factors = implode("\n", getFactors(200));
echo $factors.PHP_EOL;