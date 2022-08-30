<?php
function getPattern(string $type = "floydsTriangle", $rows = 5):void{
    $printableValue = 1;
    for ($i = 1; $i<=$rows; $i++){
        for ($j=1; $j<=$i; $j++){
            echo $printableValue." ";
            $printableValue++;
        }
        echo "\n";
    }
}

getPattern();