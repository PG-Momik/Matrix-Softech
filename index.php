<?php
$keywords = array(
    "Factorial",
    "Fibonacci",
    "Armstrong Or Not",
    "Reverse",
    "Get Descending Order",
    "Prime Or Not",
    "HCF",
    "Leap year or Not",
    "Reverse Numeric Triangle",
    "NormalStarTriangle"
    "Normal Numeric Triangle",
    "Factors of a number",
    "Multiplication table",
    "Highest in an array",
    "Swap two numbers",
    "Bubble sort",
    "Smallest in an array",
    "4 interval Rectangle matrix",
    "Hollow Rectangle",
    "Pattern with 0 at end",
    "Floyd's Triangle",
    "Weird character concat",
    "LCM",
    "Second Highest in an array"
);

for($i=1;$i<25;$i++){
    if($i<10){
        $fileName = "0".$i;
    }else{
        $fileName = $i;
    }
    $output = shell_exec("php _{$fileName}*");
    echo "########{$keywords[$i-1]}#########".PHP_EOL;
    echo $output.PHP_EOL;
    echo "####################".PHP_EOL;
}
