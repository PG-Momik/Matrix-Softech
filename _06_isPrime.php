<?php

function isPrime(int $number): bool
{
    switch ($number) {
        case 0:
        case 1:
            return false;
        default:
            for ($i = 2; $i <= $number / 2; $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
    }
}

$result = isPrime(7) ? "Prime" : "Not Prime";
echo $result . PHP_EOL;