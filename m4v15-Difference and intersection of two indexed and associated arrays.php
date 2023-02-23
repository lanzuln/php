<?php

$num1 = [1, 4, 6, 99, 3, 56, 79];
$num2 = [3, 77, 4, 66, 346, 123];

$asso1 = [
    'a' => 'bangladesh',
    'n' => 'nepal',
    't' => 'pakistan'];
$asso2 = [
    'h' => 'india',
    'a' => 'vutan',
    'n' => 'nepal',
];

$commonN = array_intersect($num1, $num2);
$commonA = array_intersect($asso1, $asso2);

print_r($commonN);
echo PHP_EOL;
print_r($commonA);