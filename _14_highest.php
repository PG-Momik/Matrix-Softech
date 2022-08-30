<?php
//using selection sort.
function getHighest(array $arr): int
{
    $size = sizeof($arr);
    for ($i = 0; $i < $size; $i++) {
        $smallest = $i;
        for ($j = $i + 1; $j < $size; $j++) {
            if ($arr[$smallest] > $arr[$j]) {
                $smallest = $j;
            }
        }
        $temp = $arr[$smallest];
        $arr[$smallest] = $arr[$i];
        $arr[$i] = $temp;
    }
    return $arr[($size - 1)];
}

$data = array(1, 5, 11, 0, 200, 500, 123, 6);
echo getHighest($data).PHP_EOL;
