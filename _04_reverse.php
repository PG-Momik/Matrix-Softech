<?php
function getReverse(int $number):int{
    $rev = 0;
    while ($number > 1)
    {
        $rem = $number % 10;
        $rev = ($rev * 10) + $rem;
        $number = ($number / 10);
    }
    return  $rev;
}

echo getReverse(12345).PHP_EOL;