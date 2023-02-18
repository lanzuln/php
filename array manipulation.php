<?php

// array এ তে dataoperation এর জন্য ৪ টি দারুন function আছে।

/*
array_shift();_______array এর প্রথম থেকে ১ কমায়বে। যতবার কল করব ততবার ১ করে কমবে। Ex- array_shift($country);
array_unshift();_______array এর প্রথম থেকে ১ বারবে। Ex- array_unshift($country, "turkey");
array_pop(); _______array এর শেষে থেকে ১ কমায়।যতবার কল করব ততবার ১ করে কমবে। Ex- array_pop($country);
array_push();_______array এর শেষে থেকে ১ বারবে। Ex- array_push($country, "turkey");
 */

$country = ["Bangladesh", "pakistan", "india", "nepal"];

array_shift($country);

$n = count($country);
for ($i = 0; $i < $n; $i++) {
    echo $country[$i];
    echo PHP_EOL;
}