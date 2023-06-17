<?php

// // echo str_repeat("Hassan ",3);
// // $var1="";

// function Repeat($var,$num){
// // switch ($var):
// //     case 1: var_dump
// if(var_dump($var) == string() && var_dump($num) == int() ){
//     echo "Hassan";
// }

// }
// // echo var_dump (8);

// Repeat("hasa",8);

// function string ($var){
//     return var_dump($var);
// }

// echo string(5);

// // @param string $text
// // @param int $number
// // @return string 


 function magic(string $text ,int $number) {
    $repeat = 0;
    while($repeat < $number){
        $number --; 
        echo "$text <br>";
    }
}

magic ("hassan","5");
