<?php

// _______general array
$mobile = ['samsung', 'iphone', 'oppo', 'vivo', 'xiomi', 'sony'];

$m1 = array_slice($mobile, 0, 3);
$m2 = array_slice($mobile, 3, null, true);
$newM = ['a', 'b'];
// $mMerge = $m1 + $m2 + $newM;
$mMerge = array_merge($m1, $newM, $m2, );

print_r($m1);
print_r($m2);
print_r($mMerge);

// ________________associative array
$random = [
    "a" => 41,
    "b" => 53,
    "c" => 2341,
    "d" => 5651,
    "y" => 43,
];

$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 2, null, true);
$rMerge = $r1 + $r2;
print_r($r1);
print_r($r2);
print_r($rMerge);