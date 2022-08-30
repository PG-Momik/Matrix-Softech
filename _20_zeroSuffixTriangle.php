<?php

function getPattern(string $type = "zeroSuffix", int $rows = 5): void
{
    $suffix = 0;
    $iterations = $rows * 2;
    for ($i = 0; $i < $iterations; $i++) {
        if ($i % 2 == 0) {
            for ($j = 0; $j <= $i; $j++) {
                echo "*";
            }
            for ($k = 0; $k <= $i; $k++) {
                echo $suffix;
            }
            echo "\n";
        }
    }
}

getPattern();