<?php

// _______array search
$mobile = ['samsung', 'iphone', 'oppo', 'assus', 'a' => 'nokia', 'vivo', 'xiomi', 'sony'];

$number = [1, 4, 56, 5, '7', 99, 3];

// আছে কিনা খুজার জন্য। last এ true দিলে type সহ check করবে।
if (in_array(7, $number, true)) {
    echo 'পাইছি';
} else {
    echo 'পাই নাই';
}
echo PHP_EOL;

// position খুজার জন্য। last এ true দিলে type সহ check করবে।
$s = array_search(5, $number);
echo $s;
echo PHP_EOL;

// key খুজার জন্য। last এ true দিলে type সহ check করবে।
if (key_exists('a', $mobile)) {
    echo 'key is exist';
} else {
    echo 'not exist';
}