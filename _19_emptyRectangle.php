<?php

function getPattern(string $type = "emptyRectangle", int $rows = 5): void
{
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            if ($i == 0 || $i == ($rows - 1) || $j == 0 || $j == ($rows - 1)) {
                echo "*";
            }else{
                echo " ";
            }
        }
        echo "\n";
    }
}

getPattern(6);

