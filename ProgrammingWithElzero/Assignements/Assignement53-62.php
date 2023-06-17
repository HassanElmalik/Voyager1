<?php

// 1
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str[$num_one] = $let_one;
$str[(int)$num_two] = $let_two;
echo $str; // Elzero
echo '<br>';


// 2
$str = "Orezle";
echo ucfirst(strtolower(strrev($str)));
echo '<br>';
// Elzero


// 3
$str = 'aAa';
$num = 3;
$char = "_";

echo chunk_split(strtolower(str_repeat($str,$num)),$num,$char);
echo '<br>';
// aaa_aaa_aaa_


// 4
$str = "<div><b>Elzero</b></div>";
echo strip_tags($str,'<b>');
echo '<br>';
// <b>Elzero</b>


// 5
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count(substr_replace($str,$o,$four),$o);
echo '<br>';
echo substr_count($str,$e);
echo '<br>';
// 1
// 2


// 6
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);
echo '<br>';
// Output "Elzero"


// 7
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
echo str_replace([1,2],"",ucfirst(strtolower(implode($chars))));
// Output"Elzero"