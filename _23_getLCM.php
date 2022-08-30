<?php

function getLCM(int $x, int $y):int
{
    $max = max($x, $y);
    $min = min($x, $y);
    $i = $max;

    while (true) {
        if ($i % $min == 0) {
            return $i;
        }
        $i = $i + $max;
    }
}

echo getLCM(30, 40).PHP_EOL;