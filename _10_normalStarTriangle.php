<?php

function generatePattern(string $type = "normalStarTriangle", int $rows = 8): void
{
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*" . " ";
        }
        echo "\n";
    }
}

generatePattern();