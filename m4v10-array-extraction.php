<?php

$mobile = ['samsung', 'iphone', 'oppo', 'vivo', 'xiomi', 'sony', 'lg'];
print_r($mobile);

$arraySlice = array_slice($mobile, 1, 3);
print_r($arraySlice);
$arraySlice = array_slice($mobile, 1, -1); // শেষের আগ পর্যন্ত।
print_r($arraySlice);
$arraySlice = array_slice($mobile, -4, 2);
print_r($arraySlice);

// যদি value গুলার key ঠিক রাখতে চাই, তাহলে true

$arraySlice = array_slice($mobile, 1, 3, true);
print_r($arraySlice);

// ______associative array কে slice korte chyle
$random = [
    "a" => 41,
    "b" => 53,
    "c" => 2341,
    "d" => 5651, 43,
];
print_r($random);
$randomSlice = array_slice($random, 2, null, true);
print_r($randomSlice);