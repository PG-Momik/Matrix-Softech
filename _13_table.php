<?php
function generateMultiplicationTable(int $number, int $end=10):void{
    for($i=1; $i<=abs($end); $i++){
        $product = $number * $i;
        echo "{$number} * {$i} = {$product}";
        echo "\n";
    }
}

generateMultiplicationTable(5, 10);
