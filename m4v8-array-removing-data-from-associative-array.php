<?php

// ______unset()_______
$person = [
    'fname' => 'rahim',
    'lname' => 'khan',
];

print_r($person);
echo PHP_EOL;
unset($person['lname']);
print_r($person);