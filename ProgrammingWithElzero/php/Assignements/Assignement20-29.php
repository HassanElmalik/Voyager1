<?php
//1
echo (10*20+15%3+190+10-400);
echo "<br>";



//2
$a ="10";

echo +$a;
echo "<br>";
echo gettype(+$a);
echo "<br>";
echo (int)$a;
echo "<br>";
echo gettype((int)$a);
echo "<br>";
echo (integer)$a;
echo "<br>";
echo gettype((integer)$a);
echo "<br>";


//3
$a = 10;
$b = 20;
echo ($a<=>$b);
echo "<br>";
echo ($a-$b)/$a;
echo '<br>';


//4
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a !== $c); // True
var_dump($a != $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) !== gettype($b)); // True


//5
$points = 10;

// $points++;
// $points++;
// $points++;
$points +=3;
echo $points;

echo "<br>";

// $points--;
// $points--;
// $points--;
// $points--;
// $points--;
$points -=5;

echo $points; // 8;
echo "<br>";


//6
$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d= $a . " " . $b . " " . $c;
echo $d;
echo '<br>';
// Method Two
$d= "$a $b $c";
echo $d;
echo '<br>';
// Method Three
$d = "$a". " $b" . " $c";
echo $d;
echo '<br>';
// Method Four
$b .= " $c";
$a .= " $b";
$d = $a;
echo $d;
echo '<br>';


//7

$a = 10;
$b = 20;

echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000
echo "<br>";



//8

// Code 1
$xa = @$xb or die("Custom Error");

// Code 2
$f = @file("Not_A_File") or die("Custom Error");

// Code 3
(@include("Not_A_File")) or die("Custom Error");