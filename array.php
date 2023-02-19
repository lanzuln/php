<?php

$country = ["Bangladesh", "pakistan", "india", "nepal"];
echo $country[0];
echo PHP_EOL; //একটা value দেখার জন্য;
print_r($country); //see all keys and values on array
echo PHP_EOL;
echo "==============";
echo PHP_EOL;

//echo count($country[0]);____________count use for find the length;

// apply loop on simple array
$n = count($country); // function আগেই কল করে নিলে বার বার রান করা লাগে না, এতে করে run দ্রুত হবে।
for ($i = 0; $i < $n; $i++) {
    echo $country[$i];
    echo PHP_EOL;
}

echo "==============";
echo PHP_EOL;

//উল্টাটা হবে, মানে শেষেরটা আগে আসবে।
$n = count($country);
for ($i = $n - 1; $i >= 0; $i--) {
    echo $country[$i];
    echo PHP_EOL;
}
;
// another system of apply loop on simple array
echo "==============";
echo PHP_EOL;
foreach ($country as $eachCountry) {
    echo $eachCountry;
    echo PHP_EOL;
}