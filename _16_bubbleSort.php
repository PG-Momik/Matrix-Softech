<?php
//include_once '_15_swap.php';
function bubbleSort(int ...$arr):array
{
    $size = sizeof($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size - $i - 1); $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
//                swap($arr[$j],$arr[$j+1]);
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

print_r(bubbleSort(2, 4, 1, 6, 9, 5));