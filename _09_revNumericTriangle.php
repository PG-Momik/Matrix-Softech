<?php

function generatePattern(string $type = "revNumericTriangle", int $rows = 7): void
{
    for ($i = $rows; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "\n";
    }
}

generatePattern();