<?php

function isLeapYear(int $year):bool{
    if((($year % 4 ==0) && ($year % 100 != 0)) || ($year % 400 == 0))
    {
        return true;
    }
    return false;
}


$result = isLeapYear(2016)?"Leap year":"Not leap year";
echo $result.PHP_EOL;