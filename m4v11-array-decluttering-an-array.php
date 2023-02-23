<?php

// এখানে use করা হয় array_splice. এটা দিয়া value কেটে ফেলে।

$mobile = ['samsung', 'iphone', 'oppo', 'vivo', 'xiomi', 'sony', 'lg'];
$middleArray = ['a', 'b', 'c']; // কাটা অংসের ভেতর আবার array পাঠানো যায়।

$spliceFood = array_splice($mobile, 1, 2, $middleArray); //লাস্ট এর $middleArray এইটা call করে ওইসকল new array এর ভালু দেয়া যায়
print_r($spliceFood);
echo PHP_EOL;
print_r($mobile);