<?php
function getSecondHighest(int ...$arr):int{
    $size = sizeof($arr);
    $max = $arr[0];
    $smax = 0;
    for($i=1; $i<($size-1); $i++){
        if($arr[$i]>$max){
            $smax = $max;
            $max = $arr[$i];
        }else if($smax<$arr[$i] && $smax < $max){
            $smax = $arr[$i];
        }
    }
    return $smax;
}

echo getSecondHighest(12,3,4,1,34,56,9).PHP_EOL;