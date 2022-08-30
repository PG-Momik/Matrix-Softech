<?php

function getHCF(int $num1, int $num2): int
{
    $hcfVal = 0;
    $higherValue = max($num1, $num2);
    for ($i = 1; $i <= $higherValue; $i++) {
        if ($num1 % $i == 0 && $num2 % $i == 0) {
            $hcfVal = $i;
        }
    }
    return $hcfVal;
}

echo getHCF(100, 200).PHP_EOL;