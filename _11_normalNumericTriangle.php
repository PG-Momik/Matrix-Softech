<?php

function generatePattern(string $type = "normalNumericTriangle", int $rows = 8): void
{
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "\n";
    }
}

generatePattern();