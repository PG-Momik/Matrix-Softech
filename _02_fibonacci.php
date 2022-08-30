<?php
function getFibonacci(int $max):array
{
    $returnValue = array();
    $number1 = 0;
    $number2 = 1;
    $temp = 0;

    while($temp <= $max){
        $temp = $temp + $number1;
        if($temp>$max) {
            break;
        }
        $returnValue[] = $temp;
        $number1 = $number2;
        $number2 = $temp;
    }
    return $returnValue;
}

$fibonacciSeries = implode(" ",getFibonacci(35));
echo $fibonacciSeries.PHP_EOL;