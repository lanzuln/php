<?php

// যে কুন string কে array করার জন্য

$mobile = explode(',', 'samsung,iphone,oppo,vivi,xiomi,sony,lg');
// delimeter;(separetor)
print_r($mobile);

// আবার ওই array কে string করার জন্য
$mobileToString = join(', ', $mobile);
echo $mobileToString;
echo PHP_EOL;

// ======= আবার যদি এমন হই যে কমা এর পর কোনটাতে space আছে, আবার কোনটাতে নাই তাহলে explode দিয়ে
// শো করবে না , তখন দিতে হবে preg_split

$Preg_array = preg_split('/(, |,)/ ', 'samsung, iphone, oppo,vivi,xiomi, sony,lg, google');
print_r($Preg_array);