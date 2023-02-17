<?php

//ref link= https://www.ostad.app/recording/id/63e739dff16f93033868cd7c
// time: 55:12

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial(8);