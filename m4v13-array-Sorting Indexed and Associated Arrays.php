<?php

// _______sorting
$mobile = ['samsung', 'iphone', 'oppo', 'assus', 'a' => 'nokia', 'vivo', 'xiomi', 'sony'];
// sort($mobile); //sort দিলে সুন্দর করে সর্টিং হবে, কিন্তু key থাকলে শো করবে না
asort($mobile); //asort দিলে সুন্দর করে key থাকলে শো করবে
print_r($mobile);

$number = [1, 4, 56, 5, 7, 99, 3];
sort($number);
print_r($number);