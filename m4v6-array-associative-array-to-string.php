<?php

$student = [
    'name'    => 'karim',
    'age'     => 16,
    'class'   => 9,
    'section' => 'B',
];
print_r($student);
echo $student['name'] . " " . $student['age'];
echo PHP_EOL;
// _________OR________
printf('%s = %s', $student['name'], $student['class']);
echo PHP_EOL;
//________ associative array কে string এ convert করতে চাইলে
// দুইটা option আছে
// ১। serialize
// ১। json_encode
// ________serialize__________
$serialized = serialize($student);
echo $serialized;
echo PHP_EOL;

$newStudent = unserialize($serialized);
print_r($newStudent);

// ________Json encode______________
$jsonFormate_encode = json_encode($student);
echo $jsonFormate_encode;
echo PHP_EOL;
// ________Json decode______________(true না দিলে object return করে);
$jsonDecode = json_decode($jsonFormate_encode, true);
print_r($jsonDecode);