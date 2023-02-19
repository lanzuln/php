<?php

$mobile = [
    "samsung" => "s21, s22, s23",
    "iphone"  => "11, 12, 13 max pro,14 max pro ",
    "oneplus" => "8t, 9r, 9rt",
];

// echo count($mobile);
//

// ============== loop for associative array
foreach ($mobile as $brand => $model) {
    echo $brand . "=" . $model;
    echo PHP_EOL;
}

/*
// =============== show keys
echo "see keys name:";
echo PHP_EOL;

$seeAll = array_keys($mobile);
print_r($seeAll);
echo PHP_EOL;

// =============== show values
echo "see values name:";
echo PHP_EOL;
$seeAll = array_values($mobile);
print_r($seeAll);

 */

/*
//  ===========apply loop on  key/value
$seeAll = array_keys($mobile);
for ($i = 0; $i < count($seeAll); $i++) {
$key = $seeAll[$i];
echo $key;
echo PHP_EOL;
}*/

//====================যদি চাই array এর মাঝে আর value অ্যাড করতে , তাহলে
// $mobile['samsung'] = $mobile['samsung'] . ", A30";
// // ________আর সহজে লিখা যায়
// $mobile['samsung'] .= ", A20";

// print_r($mobile);