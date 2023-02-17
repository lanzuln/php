<?php

//ref link= https://www.ostad.app/recording/id/63e739dff16f93033868cd7c

// -----------------This is recursive of fibonacci----------
// time: 1:00:24

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$n = 5;
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . " ";
}
echo PHP_EOL;

// -----------------This is for lopo of fibonacci----------
// time: 1:10:30

$n = 5;
$first = 0;
$second = 1;
for ($i = 0; $i < $n; $i++) {
    if ($i <= 1) {
        $next = $i;
    } else {
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
    echo $next . " ";
}