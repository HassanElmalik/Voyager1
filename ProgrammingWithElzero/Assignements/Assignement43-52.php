<?php

// 1
function greeting($name, $gender = null)
{
    if ($gender == 'Male'){
        echo "Hello Mr $name <br>";
    }elseif($gender == 'Female'){
        echo "Hello Miss $name <br>";
    }elseif($gender == null){
        echo "Hello $name <br>";
    }
}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh


// 2
function get_arguments(...$arguments)
{
    $all = '';
    foreach($arguments as $argument){
       $all .= " $argument" ;
    }
    return $all;   
}
$arguments = ["I", "Love", "PHP"]; 
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School") . '<br>'; // Hello Elzero Web School
echo get_arguments(...$arguments); // I Love PHP
echo '<br>';


// 3
function sum_all(...$nums){
    $result = 0;
    foreach($nums as $num){
        if($num == 5){
            continue;
        }
        if($num == 10){
            $num = 20;
        }
        $result += $num;
    }
    return $result;
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo '<br>';
echo sum_all(5, 10, 5, 10); // 40
echo '<br>';


//4
function multiply(...$nums){
    $result = 1;
    foreach($nums as $num){
        if(gettype($num) === 'string'){
            continue;
        }
        if(gettype($num) == 'double'){
           $num = (int)$num;
        }
        $result *= $num;
    }
    return $result;
    
}

// Needed Output
echo multiply(10, 20); // 200
echo '<br>';
echo multiply("A", 10, 30); // 300
echo '<br>';
echo multiply(100.5, 10, "B"); // 1000
echo '<br>';


//5

function check_status($a, $b, $c) {
    
    if(gettype($a) == 'string' && gettype($b) == 'integer' && gettype($c) == 'boolean'){
        if(($c) == "true"){
            return "Hello $a, Your Age Is $b, You Are Available For Hire <br>";
        }
        if(($c) == ""){
            return "Hello $a, Your Age Is $b, You Are Not Available For Hire <br>";
        }
    }
    if(gettype($a) == 'integer' && gettype($b) == 'string' && gettype($c) == 'boolean'){
        if(($c) == "true"){
            return "Hello $b, Your Age Is $a, You Are Available For Hire <br>";
        }
        if(($c) == 0){
            return "Hello $a, Your Age Is $b, You Are Not Available For Hire <br>";
        }
    }
    if(gettype($a) == 'boolean' && gettype($b) == 'integer' && gettype($c) == 'string'){
        if(($a) == "true"){
            return "Hello $c, Your Age Is $b, You Are Available For Hire <br>";
        }
        if(($a) == null){
            return "Hello $a, Your Age Is $b, You Are Not Available For Hire <br>";
    }
}
    if(gettype($a) == 'boolean' && gettype($b) == 'string' && gettype($c) == 'integer'){
        if(($a) == "true"){
            return "Hello $b, Your Age Is $c, You Are Available For Hire <br>";
        }
        if(($a) == false){
            return "Hello $b, Your Age Is $c, You Are Not Available For Hire <br>";
        }
}
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"


//6
function calculate($num1 , $num2 , $operator = 'a'){
    if ($operator == 'a' || $operator == 'add'){
        return $num1 + $num2;
    }
    if ($operator == 's' || $operator == 'subtract'){
        return $num1 - $num2;
    }
    if ($operator == 'm' || $operator == 'multiply'){
        return $num1 * $num2;
    }
}


// Needed Output
echo calculate(10, 20); // 30
echo '<br>';
echo calculate(10, 20, "a"); // 30
echo '<br>';
echo calculate(10, 20, "s"); // -10
echo '<br>';
echo calculate(10, 20, "subtract"); // -10
echo '<br>';
echo calculate(10, 20, "multiply"); // 200
echo '<br>';
echo calculate(10, 20, "m"); // 200
echo '<br>';


//7


function calculate1(int $num_one, int $num_two):float {
    return $num_one + $num_two;
}

echo calculate1(20, 10); // 30
echo '<br>';
echo gettype(calculate1(20, 10)); // Double
echo '<br>';


//8
$message = "Hello";

$$message = function ($name) use ($message){
    return "$message $name";
};

echo $Hello("Osama"); // Hello Osama
echo '<br>';


//9
$greet = function ($name){
    return "Greetings";
};
$greet1 = fn($name) => "Greetings";

// Needed Output
echo $greet("Osama"); // Greetings
echo '<br>';
echo $greet1("Osama"); // Greetings
?>