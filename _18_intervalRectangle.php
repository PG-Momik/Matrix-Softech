<?php

function getPattern(string $type = "intervalRectangle", int $rows = 4): void
{
    $interval = 4;
    for ($i = 0; $i < $rows; $i++) {
        $printableValue = $i + 1;
        for ($j = 0; $j < 3; $j++) {
            echo $printableValue . " ";
            $printableValue = $printableValue + $interval;
        }
        echo "\n";
    }
}

getPattern();