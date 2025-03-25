<?php
// declare(strict_types=1);

echo disk_total_space("f:") / 1024 / 1024 / 1024 . "<br>";
echo disk_free_space("f:") / 1024 / 1024 / 1024 . "<br>";

// echo fread ("https://elzero.org/", 10000);

// echo phpinfo();

// echo "<pre>";
// print_r ($_SERVER);
// echo "</pre>";

// echo rand(11,19);

$x = rand(10, 20);

switch ($x) {
    case "10":
        break;
    case "20":
        break;
    default:
        echo $x;
}
echo "<br>";

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

// Example
// Ibrahim
// Ahmed

echo $friends[rand(0, 3)];
echo "<br>";

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";
echo round($num2, 1);
echo "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN);
echo "<br>";

$x = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

function rounding(array $x)
{
    foreach (array_keys($x) as $y) {

        if ($y) {
            echo $x[$y];
            echo '<br>';
        }
    }
}
// echo count($x) -1;

rounding($x);

echo mt_rand() / mt_getrandmax();

echo "<pre>";
print_r(filter_list());
echo "</pre>";

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

//-------------------------------------------
