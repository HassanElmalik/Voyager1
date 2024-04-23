<?php

//1

for($index = 10 ; $index >= 1 ; $index --){
    echo $index . "<br>";
}echo "##########";
echo '<br>';


//2
$index = 0;

while($index < 20){
    $index += 2;
    echo $index . "<br>";
}
echo "##########";
echo '<br>';

$index = 0;
for (;$index < 20 ; ){
    $index +=2;
    echo $index . "<br>";
}
echo "##########";
echo '<br>';

$index = 0;

do{
    $index +=2;
    echo $index . "<br>";
}while($index < 20);
echo "##########";
echo '<br>';



//3
$num = 2;

$num -=1 ;
while ($num < 520) {
    
   echo $num . "<br>";
    $num = ($num *2 ) +2 ; 
}
echo "##########";
echo '<br>';



//4
$start = 10;
$end = 0;
$stop = 3;

for($i=$start;$i >= $stop; $i--){
    if($i < $start){
        echo "$end $i <br>";
    }else{
        echo "$i <br>";
    }
}
// while ($start>=$stop){
    
// if($start == 10){
//     echo $start .'<br>';  
//     $start--; 
// }else{
//     echo "$end $start" . "<br>" ;
//     $start--;
// }
// }
echo "##########";
echo '<br>';



//5
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

// print_r($mix);

for($i = $start ; $i <count($mix) ; $i++){
    if($i == $start){
        continue;
    }
    echo $mix[$i] . '<br>';   
}
echo "############# <br>";
// foreach ($mix as $num => $lable){
// if ($num == $start || (gettype($lable) == "string")){
//     continue;
// }
// print_r($lable . "<br>");
// }echo "##########";
// echo '<br>';



//6
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $name => $price){
    echo "The Name Is $name And I Need $price Pound From Him <br>";
}
echo "##########";
echo '<br>';



//7
$mix = [1, 2, "A", "B", "C", 3, 4];
$a=0;
$b=0;
foreach($mix as $num){
    if(gettype($num) == "string"){       
        $a++;
        continue;
    }else{
        $b++;
        echo "$num <br>";
    }
}
echo "$b Numbers Printed <br>";
echo "$a Letters Ignored <br>";
echo "############# <br>";



//8
$nums = [1, 13, 12, 20, 51, 17, 30];

foreach($nums as $num){
    if($num % 2 == 0){
        echo $num/2 ."<br>";
    }
}echo "############# <br>";
// foreach($nums as $even){
     
//    if ($even %2 != 0){
//     continue;
//    }
//    echo $even/2 . "<br>";
// }



//9
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for($i=$nums[$help_num]; $i<$help_num;$i++){
    echo $names[$i] . "<br>";
}
echo "############# <br>";



//10
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums As $i => $num){
echo $nums[$i] . "+" . $nums[$help_num -$i] . " = " . $nums[$i] + $nums[$help_num - $i];
echo '<br>';
}