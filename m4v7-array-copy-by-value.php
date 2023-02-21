<?php

// _________copy by value/deep copy

$person = ['fname' => 'rahim', 'lname' => 'khan'];
$newperson = $person;
$newperson['lname'] = 'mia';
print_r($person);
echo PHP_EOL;
print_r($newperson);

// _________copy by reference/shallow copy