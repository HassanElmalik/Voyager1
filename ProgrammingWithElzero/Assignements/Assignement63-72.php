<?php

// 1
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];
  
echo '<pre>';
print_r (array_chunk(array_change_key_case($friends),2,true));
echo '</pre>';


// 2
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r (array_change_key_case(array_combine($codes, $means)));
echo '</pre>';


// 3
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

echo '<pre>';
print_r((array_reverse(array_change_key_case(array_flip($friends)))));
echo '</pre>';


// 4
$nums = [10, 20, 30];

echo (array_reduce($nums, fn($n1,$n2)=>$n1+$n2));
echo '<br>';
echo array_sum($nums);
echo '<br>';


// 5
$nums = [5, 10, 20, 5, 30, 40];

// $nums[0]=0;
// $nums[3]=0;
// echo array_sum($nums);
echo (array_sum(array_filter($nums, fn($n) => $n != 5)));
echo '<br>';


// 6
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo '<pre>';
print_r(array_pad($chars,10,substr_replace($char,"@",$zero)));
echo '</pre>';


// 7
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);
echo current($names) . "<br>"; // "Sayed"

end($names);
echo current($names) . "<br>"; // "Ali"

reset($names);
echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"

// 8
$chars = ["A", "B", "C"];


echo '<pre>';

print_r(array_pad($chars, 4, "D"));

array_push($chars,"D");
print_r($chars);

$chars = ["A", "B", "C"];
$chars[]="D";
print_r($chars);

$chars = ["A", "B", "C"];
print_r(array_merge($chars,["D"]));

echo '</pre>';

// 9
$nums = [1, 2, 3, 4, 5, 6];

echo '<pre>';
print_r(array_slice($nums,-5,-2));
echo '</pre>';

// 10
$mix = [1, 2, 3, "A", "B", "C",  7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix,3,3);
echo '<pre>';
print_r( explode(" ",substr_replace(substr_replace(implode(" ",$mix),implode(" ",$nums),6,0)," ",11,0)));
echo '</pre>';


// 11
$arr = ["A", "B", "C", "D", "E"];

foreach ($arr as $key => $value){
  $count_arr = 0;
 for($i = 0;$i <= $key;$i++){
    $count_arr++;
 }
}
echo $count_arr;
echo '<br>';


// 12
$nums = [11, 2, 10, 7, 20, 50];

foreach ($nums as $key => $value){
  $sum = 0;
  for($i = 0; $i <= $key; $i++){
    $sum += $nums[$i];
  } 
}
echo $sum;
echo '<br>';
echo '<hr>';


// 13
$nums = [10, 100, -20, 50, 30];
// if($nums[0] > $nums[1]){
//   echo $nums[0] . "<br>";
// }else{
//   echo $nums[1] . "<br>";
// }

foreach ($nums as $key => $value){
  
  
  
}
// Output
// 100
// echo "the key " . $key . '<br>';
      // $i = 0;
      // echo "the i " . $i . '<br>';
      // if ($nums[$key] < $nums[$i +1]){
        //   echo $nums[$i +1] . '<br>';
        // }else{
          //   echo $nums [$key] . '<br>';
          // }
          // $i++;
      // echo "the i " . $i . '<br>';
// echo "the key " . $key . '<br>';
for($i = 0; $i < $key; $i++){
echo "the i " . $i . '<br>';
foreach($nums as $key1 => $value1){
  echo "the key " . $key1 . '<br>';
  if( $i !== $key1){
    // switch ($nums[$i]){
    //   case $nums[$i] > $nums[$key1]:
    //     echo $nums[$i] . '<br>';
    //     break 2;
    //   case $nums[$key1] > $nums[$i]:
    //     echo $nums[$key1] . '<br>'; 
    //     break 2;
    // }

      if ($nums[$i] > $nums[$key1]){
        echo $nums[$i] . '<br>';
        break;
      }
        elseif($nums[$key1] > $nums[$i]){
          echo $nums[$key1] . '<br>';
          break;
        }
      }
  }
    }
  