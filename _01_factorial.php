<?php
function getFactorial(int $num): int{
    $product = 1;
    for($i=1;$i<=$num;$i++){
        $product *=$i;
    }
    return $product;
}

echo getFactorial(5).PHP_EOL;