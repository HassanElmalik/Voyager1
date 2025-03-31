<?php


$x = $_GET;
foreach ($x as $y=>$z){
    echo $y ." => ". $z . '<br>';
}

// foreach ($x as $y=>$z){
//    parse_str("$z" , $l);
//    echo "<pre>";
//    print_r($l);
//    echo "</pre>";
// }



