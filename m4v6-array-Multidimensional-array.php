<?php

// array এর ভেতর array kora এবং specific ভালু কে identify kora
$some = [
    'mobile'  => explode(',', 'samsung,iphone,oppo,vivi,xiomi,sony,lg'),
    'country' => explode(',', 'bangladesh,nepal,india,pakistan'),
    'number'  => explode(',', '1,3,45,34'),
];
print_r($some);

// এখন কুনো value add করতে চাইলে
array_push($some['country'], 'vutan');
print_r($some);

// কুনো value দেখা
echo $some['number'][2];

echo PHP_EOL;

// কুনো value দেখা
$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [
        5, 6, 7,
    ]],
];

echo $sample2[3][3][2];