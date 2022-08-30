<?php

function weirdConcat(string ...$arr): string
{
    $returnValue = [];
    $number_of_items = sizeof($arr);
    $max_len = max(array_map('strlen', $arr));
    for ($i=0; $i<$max_len;$i++){
        for ($j = 0; $j < $number_of_items; $j++) {
            $returnValue[] = $arr[$j][$i]??"";
        }
    }
    return implode("",$returnValue);
}

echo weirdConcat("JOHN", "SMITH").PHP_EOL;
