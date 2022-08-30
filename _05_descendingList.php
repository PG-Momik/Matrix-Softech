<?php
function getDescendingList(int $number):array{
    $returnValue = array();
    for($i=$number; $i>0; $i--){
        $returnValue[] = $i;
    }
    return $returnValue;
}

$list = implode("\n", getDescendingList(5));
echo $list.PHP_EOL;
