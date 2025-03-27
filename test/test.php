<?php

$x = rand (10, 20);

switch ($x) {
    case "10":
        break;
    case "20":
        break;
    default:
    echo $x;
}
echo "<br>";

$y = rand (11,19);
echo $y;
echo "<hr>";
//-----------------------------------------------------

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// Example
// Ibrahim
// Ahmed

echo $friends[rand(0, 3)];
echo "<hr>";
//------------------------------------------------------

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = (-7.5); // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2, 1);
echo "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo floor(-7.5);
echo "<hr>";
//------------------------------------------------------

echo 1;
$x = filter_list();

$y= [257,258,259,272,277,273,274,275,
276,513,514,515,522,516,517,518,519,520,523,1024]; 
$z = array_keys($x);

echo "<pre>";
print_r(array_replace($z,$y));
print_r($z);
echo "<pre>";

echo "<pre>";
print_r($x);
echo "</pre>";

// foreach (array_keys($x) as $y){
//     echo $y , '<br>';
// };
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )
echo "<hr>";
// -------------------------------------------------
// data types & type casting
echo '<pre>';

require_once 'paymentgateway/paddle/transaction2.php';
$x = new transaction2(2, 'ok');
$x->process();

var_dump($x);

echo '</pre>';
echo "<hr>";

//-------------------------------------------

echo intdiv(14,5) , '<br>';
echo 11.5 % 5 , '<br>';
echo gettype(11.5 % 5) , '<br>';
echo fmod(11.5,5), '<br>';
// $x = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

// function rounding(array $x)
// {
//     foreach (array_keys($x) as $y) {

//         if ($y) {
//             echo $x[$y];
//             echo '<br>';
//         }
//     }
// }
// echo count($x) -1;

// rounding($x);

// echo mt_rand() / mt_getrandmax();
echo gettype(fmod(11.5,5)) , '<br>';