<?php

//4-What_Are_Constants_Variable_Variables
echo "<u><h3>Lesson 4</u></h3>";

// declare(strict_types=1);
define ('STATUS_PAID', 'paid');

echo STATUS_PAID;

var_dump(defined('STATUS_PAID'));

const STATUS_PAID2 = "paid2";

echo STATUS_PAID2;
echo '<br>';

/*
constants created with const keyword are defined at the compile time
while constants created with the define function are defined at a run time
*/

if(1 == 1){
    // const foo = 'bar';
    define ('FOO', 'bar');
}
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';


$foo = 'bar';
$$foo = 'baz';
echo "$foo  {$$foo}";
echo '<br>';

echo "Joe's Invoice";
echo '<hr>';
// ---------------------------------------------------------------
//5-PHP_Data_Types_-_Typecasting_Overview_How_It_Works
echo "<u><h3>Lesson 5</u></h3>";

/*
PHP is dinamically typed or also know as weakly typed language where you 
are not required to define a type of your variable  and also the type of the 
variable can change after it has been defined , dinamically typed languages
means that the type checking happens at the runtime while statically 
typed language means that the type checking happens at the compile time 
for example Java,C++,C# are statically typed languages , Because PHP allows
such type system it is more flexiable , but that flexiblity comes at a price
of performance and can some times results an unexpected bugs , However PHP
has improved its type system alot in later veirsions and it even supports
strict types , PHP supports 10 primitive types which are below and there are
also 2 sudo types which are mainly used for readability
*/

# 4 Scalar Types
    # bool --> true / false
    $completed = true;
    # int --> 1, 2, 3, 0, -5 (no decimal)
    $score = 75;
    # float --> 1.5, 0.1, 0.005, -15.8
    $price = 0.99;
    # string --> "Gio", "Hello World"
    $greeting = "Hello Hassan";

    echo $completed . '<br>';
    echo $score . '<br>';
    echo $price . '<br>';
    echo $greeting . '<br>';
    echo gettype($completed) . '<br>';
    echo gettype($score) . '<br>';
    echo gettype($price) . '<br>';
    echo gettype($greeting) . '<br>';

# 4 Compound Types
    # array (List of items)
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    echo $companies;
    echo '<br>';
    print_r ($companies);
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null

# 2 Sudo Types (used for readability)
    # mix
    # void

    // declare(strict_types=1);
    function summ1($x,$y){
        // $x = 5.5;
        var_dump($x, $y);
        return $x + $y;
    }
    function sum(int $x, int $y){ // the data type is guranteed to be integer untill to this point
        // $x = 5.5;
        var_dump($x, $y);
        return $x + $y;
    }// here php converted this datatypes (4.5,'3') into integers
    function summ2(array $x, int $y){
        // $x = 5.5;
        var_dump($x, $y);
        return $x + $y;
    }// here php cannot converte (4.5) to an array so it will throw an error
    function summ3(int $x, int $y){
        $x = 5.5; //we can here change the data type of x from int to float and this is acceptable in php
        var_dump($x, $y);
        return $x + $y;
    }
    
$summ1 = summ1(4.5,'3');
var_dump($summ1);
echo $summ1 . '<br>';
echo '<br>';

$sum = sum(4.5,'3');
var_dump($sum);
echo $sum . '<br>';
echo '<br>'; 

// $summ2 = summ2(4.5,'3');
// var_dump($summ2);
// echo $summ2 . '<br>';
// echo '<br>';

$summ3 = summ3(4 ,'3');
var_dump($summ3);
echo $summ3 . '<br>';
echo '<br>';

$x = (int)'5';
var_dump($x);
var_dump(-0.0);
echo '<hr>';
// ------------------------------------------------------------------
//6-Boolean_Data_type
echo "<u><h3>Lesson 6</u></h3>";

$isComplete = -0;
// integers 0 , -0 = false
// floats 0.0, -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false
if($isComplete){
    echo 'success';
}else{
    echo 'fail';
}
echo false;
$c = (string) false;
var_dump($c);
var_dump(is_bool($isComplete)) ;
/* when you printing something in PHP it will cast it into a string and
when boolean is cast to a string false becomes an empty string and true 
becomes 1
*/
$iscomplete2 = (string) true;
var_dump(is_bool($iscomplete2));
$iscomplete3 = true;
var_dump(is_bool($iscomplete3));

$x = (bool)'false';
var_dump($x);
echo '<hr>';

// ---------------------------------------------------------------
//7-Integers_Data_type
echo "<u><h3>Lesson 7</u></h3>";

$x = 5 ; // decimal integer
$y = 0x2a ; // hexdecimal integer
$z = 055; // octa number
$e = 0b11; // binary number
$l = 0b110; // binary number

echo $x . '<br>';
echo $y . '<br>';
echo $z . '<br>';
echo $e . '<br>';
echo $l . '<br>';

$x = PHP_INT_MAX;
$y = PHP_INT_MAX + 1;
echo $x . '<br>';
echo $y . '<br>';
var_dump($x);
var_dump($y);
echo '<br>';

$x = (int) true;
var_dump($x);
$x = (int) false;
var_dump($x);
$x = (int) 5.98;
var_dump($x);
$x = (int) '5.98 test';
var_dump($x);
$x = (int) 'test';
var_dump($x);
$x = (int) null;
var_dump($x);
var_dump(is_int($x));
$x = 2_000_000_000;
var_dump($x);
$x =  '2_000_000_000';
var_dump($x);
$x = (int) '2_000_000_000';
var_dump($x);
echo '<hr>';

//-------------------------------------------------------------------
//8-Float_Data_type
echo "<u><h3>Lesson 8</u></h3>";

 $x = 13.5e3;
 $y = 13.5e-3;
 echo $x . '<br>';
 echo $y . '<br>';
 var_dump($x);
 var_dump($y);
 $x = 13_000.5;
 var_dump($x);
 $x = 13_234.5;
 var_dump($x);
 
 echo PHP_FLOAT_MAX . '<br>';
 
 $x = floor((0.1 + 0.7) * 10); // in binary this ((0.1 + 0.7) * 10) will equal to (7.9999999999991118) and applying floor on it will result to 7 
 $y = ceil((0.1 + 0.7) * 10);
 $z = ceil((0.1 + 0.2) * 10); // in binary this (0.1 + 0.2) = (0.300000000000004) and (0.300000000000004 * 10) = (3.00000000000004) and applying ceil on it will result to 4
 echo $x . '<br>';
 echo $y . '<br>';
 echo $z . '<br>';

 $x = 0.23;
 $y = 1 - 0.77;

 var_dump($x , $y);

 if ($x == $y){
    echo 'yes . <br>';
 }else{
    echo 'no . <br>';
 }

 echo NAN . '<br>';
 echo log(-1) . '<br>';
 echo INF . '<br>';
 echo PHP_FLOAT_MAX * 2;

 $x = PHP_FLOAT_MAX * 2;
 var_dump($x);
 var_dump(is_infinite($x));
 var_dump(is_finite($x));
 var_dump(is_nan($x));
 var_dump(is_nan(log(-1)));

 $x = 5;
 var_dump((float)$x);
 var_dump(floatval($x));
 $x = '15a';
 $y = 'asdasdw';
 var_dump((float)$x);
 var_dump((float)$y);
 echo '<hr>';

// ------------------------------------------------------------------
//9-PHP_String_Data_Type_-_Heredoc_Nowdoc_Syntax_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 9</u></h3>";

$firstname = 'Hassan';
$lastname = "ElMalik";
$name = $firstname . ' ' . $lastname;
echo $name . '<br>';
echo $name[0] . '<br>';
echo $name[-1] . '<br>';
$name[2]= 'S';
$name[-2]= 'S';
echo $name . '<br>';
var_dump($name);
$name[20]= 'S';
echo $name;
var_dump($name);

//Heredoc
$x =1;
$y =2;
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;
echo nl2br($text);
echo '<br>';

echo <<<Text2
Line1 
Line2
line3
Text2;

$text = <<<TEXT
Hello World
TEXT;
var_dump($text);
$text = <<<TEXT
    Hello World
TEXT;
var_dump($text);

$text = <<<TEXT
<div>
<p>Hello</p>
<p>World</p>
</div>
TEXT;
echo ($text);
echo '<br>';

//Nowdoc
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;
echo nl2br($text);
echo '<hr>';
 
//-------------------------------------------------------------------
//10-PHP_Null_Data_Type_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 10</u></h3>";

// null constant
$x = null;
echo $x . '<br>';
var_dump($x);
var_dump(is_null($x));
var_dump($x === null);
var_dump($xx);
var_dump(is_null($xx));

$x =123;
var_dump($x);
unset($x);
var_dump($x);

$x = null;
var_dump((string)$x);
var_dump((int)$x);
var_dump((bool)$x);
var_dump((array)$x);
echo '<hr>';

//------------------------------------------------------------------
//11-PHP_Array_Data_Type_-_Indexed_Associative_Multi-Dimensional_Arrays_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 11</u></h3>";

$programmingLanguages = ['PHP', 'Java', 'Paython'];
$name = 'Hassan';
echo $name[0] . '<br>';
echo $programmingLanguages[0] . '<br>';
echo $name[-1] . '<br>';
echo $programmingLanguages[-1] . '<br>';
var_dump(isset($programmingLanguages[2]));
var_dump(isset($programmingLanguages[3]));
$programmingLanguages[1] = 'C++';
echo $programmingLanguages[1];
var_dump($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br>';
echo '---------------';

$programmingLanguages[] = 'Java';
array_push($programmingLanguages, 'C', 'C#', 'GO');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo count($programmingLanguages);
echo '<br>';

$programmingLanguages = ['PHP' => '8.0', 'Paython' => '3.9'];
$programmingLanguages['GO'] = '1.15';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo $programmingLanguages['PHP'];
echo '<br>---------------';

$newLanguage = 'Java';
$programmingLanguages[$newLanguage] = 8.2;
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


$programmingLanguages = [
    'PHP' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019'],
        ],
    ],
     'Paython' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.paython.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ],
    ],
];
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['PHP']['website'] . '<br>';
echo $programmingLanguages['PHP']['versions'][0]['releaseDate'] . '<br>';
var_dump($programmingLanguages['PHP']['versions'][3]['releaseDate']) . '<br>';

$array = [0 => 'foo', 1=> 'bar', '1' => 'baz'];
print_r($array);
echo '<br>---------------<br>';

$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd' , null => 'e'];
print_r($array);
echo '<br>';
echo $array[''];
echo $array[null];
echo '<br>---------------<br>';

$array = ['a', 'b', 50 => 'c', 'd', 'foo' =>'e'];
echo '<pre>';
print_r($array);
echo '</pre>';

echo array_pop($array);
echo '<br>';
print_r($array);
echo '<br>';
echo array_shift($array);
echo '<br>';
print_r($array);

$array = ['a', 'b', 50 => 'c', 'd', 'foo' =>'e'];
unset($array[2], $array[1]);
echo '<br>';
print_r($array);
echo '<br>';

$array = [1, 2, 3];
unset($array[0], $array[1], $array[2]);
print_r($array);
echo '<br>';
$array[] = 1;
print_r($array);

$x = 5;
var_dump((array) $x);
$x = '5';
var_dump((array) $x);
$x = null;
var_dump((array) $x);

$array = ['a' => 1, 'b'=> null];
var_dump(array_key_exists('a', $array));
var_dump(isset($array['a']));
var_dump(array_key_exists('b', $array));
var_dump(isset($array['b']));

//-------------------------------------------------------------------
//12-What_Are_Expressions_In_PHP_How_They_Are_Evaluated_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 12</u></h3>";

$x= 5;
$y = $x;
$z= $x == $y;
$a = sum($x, $y);

if($x < 5){
    echo 'Hello';
}
echo '<hr>';

//-------------------------------------------------------------------
//13-PHP_Operators_Part_1_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 13</u></h3>";

// Arithmetic Operators (+ - * / % **)
$x = 10;
$y = -2;

var_dump($x - $y);
$x = '10';
var_dump($x);
var_dump(+$x);
var_dump(-$x);

$x = 10;
$y = 2;
var_dump($x / $y);
$x = 10;
$y = 2.0;
var_dump($x / $y);
$x = 10;
$y = 3;
var_dump($x / $y);
// $x = 10;
// $y = 0;
// var_dump($x / $y);
$x = 10;
$y = 0;
var_dump(fdiv($x , $y));

$x = 10;
$y = 2;
var_dump($x % $y);
$x = 10.5;
$y = 2.9;
var_dump($x % $y);
$x = 10.5;
$y = 2.9;
var_dump(fmod($x , $y));
$x = 10;
$y = 3;
var_dump($x % $y);
$x = 10;
$y = -3;
var_dump($x % $y);
$x = -10;
$y = -3;
var_dump($x % $y);
$x = -10;
$y = 3;
var_dump($x % $y);
echo '-------------';

// Assignment Operators (= += -= *= /= %= **=)
$x = $y =5;
var_dump($x, $y);
$x = ($y = 10) + 5;
var_dump($x, $y);

// String Operators (. .=)

// Comparison Operators (== === != <> !== < > <= >= <=> ?? ?:)
$x = 5;
$y = '5';
var_dump($x == $y);
var_dump($x === $y);
var_dump($x <=> $y);
$x = 50;
$y = '5';
var_dump($x <=> $y);
$x = 50;
$y = '500';
var_dump($x <=> $y);

$x = 0;
$y = '0as';
var_dump($x == $y);

$x = 'Hello World';
$y = strpos($x, 'H');
if($y == false){
    echo 'H Not Found';
}else {
    echo 'H Found at index ' . $y;
}echo '<br>';
if($y === false){
    echo 'H Not Found';
}else {
    echo 'H Found at index ' . $y;
}echo '<br>';

$result = $y === false? 'H Not Found' : 'H Found at index ' . $y;
echo $result;

$x = null;
$y = $x ?? 'hello';
var_dump($y);
$x = false;
$y = $x ?? 'hello';
var_dump($y);
$y = $zz ?? 'hello';
var_dump($y);
echo '<hr>';

//----------------------------------------------------------------------
// 14-PHP_Operators_Part_2_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 14</u></h3>";

// Error Control Operator (@)
$x = @file('foo.txt');

// Increment/Decrement Operators (++, --)
// only effects numbers and strings
$x = true;
var_dump(++$x) ;
$x = null;
var_dump(++$x) ; // null value will only be affected by ++ and will not get affected by --
$x = null;
var_dump(--$x) ;
$x = 'abc';
var_dump(++$x) ;// string value will only be affected by ++ and will not get affected by --
$x = 'abc';
var_dump(--$x) ;

// Logical Operators (&& || ! and or xor)
$x = true;
$y = false;
$z = $x && $y;
var_dump($z);
$z = $x and $y;
var_dump($z);
echo '-----------';

$x = true;
$y = false;
function hello(){
    echo 'Hello World';
    return false;
}
var_dump($x || hello());
echo '-----------<br>';
var_dump($x && hello());

$x = false;
$y = false;
var_dump($x && hello());
var_dump($x && hello() || true);
echo '-----------';
echo '<br>';
var_dump($x || hello() && false);
var_dump($x || false && hello());
echo '-----------';

// Bitwise Operators (& | ^ - << >>)
$x = 6; //binary representation  110
                            //   &  (returns 1 if both are 1)
$y = 3; // binary representation 011
                            //   ---
                            //   010 = 0+2+0 = 2
var_dump($x & $y);
$x = 6; //binary representation  110
                            //   |  (returns 1 if one of them is 1)
$y = 3; // binary representation 011
                            //   ---
                            //   111 = 1+2+4 = 7
var_dump($x | $y);
$x = 6; //binary representation  110
                            //   ^  (returns 1 if one of them but not both are 1)
$y = 3; // binary representation 011
                            //   ---
                            //   101 = 1+0+4 = 5
var_dump($x ^ $y);
$x = 6; //binary representation  -110 = 001 (- will flip the bits)
                            //          &  
$y = 3; // binary representation        011
                            //           ---
                            //          001 = 0+0+1 = 1
var_dump(-$x & $y);
$x = 6; //binary representation  110 (- will flip the bits)
                            //   <<  
$y = 3; // binary representation shift by 3 (same as 6*2*2*2)
                            //   ---
                            //  110000 = 0+0+0+0+16+32 = 48
var_dump($x << $y);
$x = 6; //binary representation  110 (- will flip the bits)
                            //   >>  
$y = 3; // binary representation discard the bits by 3 
                            //   ---
                            //  000 = 0
var_dump($x >> $y);
$x = 6; //binary representation  110 (- will flip the bits)
                            //   >>  
$y = 1; // binary representation discard the bits by 1 (same as 6/2)
                            //   ---
                            //  11 = 1+2 = 3
var_dump($x >> $y);
// if the variables x and y are strings then the bitwise operators will operates on thier Assci numbers

// Array Operators (+ == === != <> !===)
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];
$z = $x + $y;
print_r($z);
echo '<br>';

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8];
$z = $x + $y;
print_r($z);

// Execution Operators ('') only if u need to excute shell commands from PHP

// Type Operators (instanceaf)

// Nullsafe Operators - PHP8 (?)
echo '<hr>';

// ------------------------------------------------------------------------
// 15-PHP_Operator_Precedence_Associativity_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 15</u></h3>";

$x = true;
$y = false;
$z = true;
var_dump($x && !$y);
var_dump($x && $y || $z);

$z = $x && $y;
var_dump($z);
$z = $x and $y;
var_dump($z);
$z = ($x and $y);
var_dump($z);
echo '<hr>';

//-------------------------------------------------------------------------
// 16-Control_Structures_in_PHP_-_Conditional_Statements_-_if_else_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 16</u></h3>";

$score = 90;
if ($score >= 95){
    echo 'A+';

 } elseif ($score >= 90){
        echo 'A';
    }echo '<br>'
?>
<html>
    <body>
        <?php $score = 95 ?>

        <?php if ($score >= 90){ 
            echo 'A';
         } elseif ($score >= 80) { 
            echo 'B';
        }else {
            echo 'F';
        }
        ?>
        <br>
    </body>
</html>
<html>
    <body>
        <?php $score = 95 ?>

        <?php if ($score >= 90): ?> 
            <strong style="color:green">A</strong>
        <?php elseif ($score >= 80): /*we can't use (else if) with space*/ ?>
            <strong>B</strong>
        <?php else: ?>
            <strong style="color:red">F</strong>
        <?php endif ?>      
    </body>
</html>
<?php
echo '<hr>';

//------------------------------------------------------------------
//17-PHP_Loops_Tutorial_-_Break_Continue_Statements_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 17</u></h3>";

//while
while(true){
    if($i >= 15){
        break;
    }
    echo $i++;
}
echo '<br>';
$i = 0;
while(true){
    if($i >= 15){
        break;
    }
    echo $i++;
}
echo '<br>-----------<br>';
$i = 0;
while(true){
   while($i > 10){
    break 2; // this means break the first and second while loop
    // break; // this means only break the second while loop and that will leave us with an infinite first while loop
    }
    echo $i++;
}
echo '<br>';
$i = 0;
while ($i <= 15){
    if ($i % 2 === 0){
        $i++; // if we didn't put the i++ before the continue that will include to an infinite loop because continue skips everything after it
        continue;
    }
    echo $i++ . ',';
}
echo '<br>';
//do while

// for
for($i = 0; $i<15; print $i, $i++){
}
echo '<br>';
for($i = 0; print $i,$i<15;  $i++){
}
echo '<br>';

$text = 'Hello World';
for($i = 0; $i < strlen($text); $i++){
    echo $text[$i] . '<br>';
}
$text = ['a', 'b', 'c', 'd'];
for($i = 0; $i < count($text); $i++){
    echo $text[$i] . '<br>';
}
for($i = 0, $length = count($text) ; $i < $length ; $i++){
    echo $text[$i] . '<br>';
}

// foreach
$programming = ['php', 'java', 'c++', 'go', 'rust'];

foreach($programming as $key => $language){
    echo $key . ':' . $language . '<br>';
}
$language = 'c#';
print_r($programming);
echo '<br>';

foreach($programming as $key => &$language){
    echo $key . ':' . $language . '<br>';
}
$language = 'c#';
print_r($programming);
echo '<br>';

$programming2 = ['php', 'java', 'c++', 'go', 'rust'];
foreach($programming2 as $key => &$language2){
    echo $key . ':' . $language2 . '<br>';
}
unset($language2);
$language2 = 'c#';
print_r($programming2);
echo '<br>';

$programmings = ['php', 'java', 'c++', 'go', 'rust'];
foreach($programmings as $key => &$languages){
    $languages =  'css';
    echo $key . ':' . $languages . '<br>';
}

$user = [ 
 'name' => 'Hassan',
 'email' => 'hassan@email.com',
 'skills' => ['php', 'laravle', 'react']
];
foreach($user as $key => $value){
    echo $key . ': ' . $value . '<br>';
}
foreach($user as $key => $value){
    if(is_array($value)){
        $value = implode('.', $value);
    }
    echo $key . ': ' . $value . '<br>';
}
foreach($user as $key => $value){
    echo $key . ':';
    if(is_array($value)){
        foreach($value as $skill){
            echo $skill . '-';
        }
    }else{
        echo $value;
    }
    echo '<br>';
}
echo '<hr>';

//------------------------------------------------------------------------
//18-PHP_Switch_Statement_-_Switch_vs_if_else_statement_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 18</u></h3>";

$paymentstatus = [1, 3, 0];
foreach ($paymentstatus as $payment){
    switch($payment){
        case 1:
            echo 'Paid';
            break;
        case 2:
        case 3:
            echo 'Payment Declined';
            break;
        case 0:
            echo 'Pending Payment';
            break;
        default:
        echo 'Unknown Payment Status';
    }
    echo '<br>';
}
foreach ($paymentstatus as $payment){
    switch($payment){
        case 1:
            echo 'Paid';
            break 2; // will break from the switch and the loop if the condition is true
        case 2:     // and it will not continue to the <br> below
        case 3:
            echo 'Payment Declined';
            break 2;
        case 0:
            echo 'Pending Payment';
            break;
        default:
        echo 'Unknown Payment Status';
    }
    echo '<br>';
}
foreach ($paymentstatus as $payment){
    switch($payment){
        case 1:
            echo 'Paid';
            continue; // will give us a warning but it will continue the loop
        case 2:      
        case 3:
            echo 'Payment Declined';
            break;
        case 0:
            echo 'Pending Payment';
            break;
        default:
        echo 'Unknown Payment Status';
    }
    echo '<br>';
}
foreach ($paymentstatus as $payment){
    switch($payment){
        case 1:
            echo 'Paid';
            continue 2; // it will not continue to the <br> below
        case 2: 
        case 3:
            echo 'Payment Declined';
            break;
        case 0:
            echo 'Pending Payment';
            break;
        default:
        echo 'Unknown Payment Status';
    }
    echo '<br>';
}
foreach ($paymentstatus as $payment){
    switch($payment){
        case 1:
            continue 2; // here we will not see the paid
            echo 'Paid';
        case 2: 
        case 3:
            echo 'Payment Declined';
            break;
        case 0:
            echo 'Pending Payment';
            break;
        default:
        echo 'Unknown Payment Status';
    }
    echo '<br>';
}
// the difference between if and switch
function x(){
    sleep(1);
    echo 'Done <br>';
    return 3;
}
// if(x()===1){
//     echo 1;
// }elseif (x()===2){
//     echo 2;
// }elseif(x()===3){
//     echo 3;
// }else{
//     echo 4;
// }// here will print done 3 times and will return 3 after 3 seconds
// to fix this we can do this:
$x = x();
if($x===1){
    echo 1;
}elseif ($x===2){
    echo 2;
}elseif($x===3){
    echo 3;
}else{
    echo 4;
}// or we can use switch statement and it will fix the problem and u dont have to assignment the function to a variable 
echo '<hr>';

//-------------------------------------------------------------------
//19-PHP_Match_Expression_-_Match_vs_Switch_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 19</u></h3>";

$payment = 1;
match($payment){
    1 => print 'Paid',
    2 => print 'Payment Declined',
    0 => print 'Pending Payment',
};
echo '<br>';
// match expression can be assigned to a variable 
// match expression does not need the break statement
// match expression need the default statement because u need to specify all the possible cases in match expression
// match expression does strict comparison while switch statement dose loose comparison
$payment = 3;
$paymentstatus = match($payment){
    1       =>'Paid', // this can be any expression u want , u can return a function and so on
    2,3     =>'Payment Declined',
    0       =>'Pending Payment',
    default => 'Unknown Payment Status', // without the default we may fall in an error if we put a different value
};
echo $paymentstatus;
echo '<br>';

$payment = '3';
$paymentstatus = match($payment){
    1       =>'Paid',
    2,3     =>'Payment Declined',
    0       =>'Pending Payment',
    default => 'Unknown Payment Status', // without the default we may fall in an error if we put a different value
};
echo $paymentstatus;
echo '<br>';

$payment = false;
$paymentstatus = match($payment){
    1 > 2   =>'Paid',
    2,3     =>'Payment Declined',
    0       =>'Pending Payment',
    default => 'Unknown Payment Status', 
};
echo $paymentstatus;
echo '<hr>';

//-----------------------------------------------------------------
//20-PHP_Return_Declare_Tickable_Statements_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 20</u></h3>";

/* the return statement will end the excution of the script in the scope 
 that it in , if u didn't specify any expression after the return statement
 a null value will be returned
 */

// declare - ticks
function onTick(){
    echo 'Tick <br>';
}
// register_tick_function('onTick');
declare(ticks = 3);
$i = 0;
$length = 10;
while($i < $length){
    echo $i++ . '<br>';
}
echo '<br>';
// declare - encoding
//can be used to specify the encoding script

// declare - strict_types
// declare(strict_types=1); // it must be at the first line on the script and it effects in every thing below it 
function sum1(int $x, int $y){
    return $x + $y;
}
echo sum(5,10);
echo '<br>';
// goto
echo '<hr>';

//---------------------------------------------------------------------
//21-How_To_Include_Files_In_PHP_-_Include_and_Require_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 21</u></h3>";

// if the file is not exist , include will result a warning but will continue the script while require will result an error and stop the script
/* if no path specified when using one of this statments the file is 
looked up by default from the directory that set in ur php.ini configration
file under the include_path section and if the file does not exist there
or does not set the it will look up for the file in the current directory in
the current script
*/
$y2 = 10;
require 'file.php';
$x ++;
echo $x . '<br>';
echo $y2 . '<br>';
require_once 'file.php';
echo $x . '<br>';
echo $y2 . '<br>';
echo 'Hello World <br>';

$z2 = include 'file.php';
var_dump($z2);

ob_start();
include 'nav.php';
$nav = ob_get_clean();
echo $nav;
var_dump($nav);
$nav = str_replace('About', 'About Us', $nav);
echo $nav;

echo '<hr>';

//------------------------------------------------------------------------
//22-How_To_Create_Functions_In_PHP_-_Functions_Tutorial_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 22</u></h3>";

var_dump(foo());
function foo(){
    return;
}

/*
u can use the function above the place you declare it that means that you 
can define a function at the top or middle or bottom and it will always
be loaded by php first so it can be used as long as the function has been 
loaded to the script that calls it , there are a couple of exceptions that if 
you defined the function conditionally then the codition has to happen and
pass before you call that function another exception is when you declaring
functions within a functions and try to call the inner function befor the
outer function
*/

//var_dump(fooo()); //will give an error
// if(true){
//     function fooo(){
//         return 'Hello World';
//     }
// }

foo3();
bar2();
function foo3(){
    echo 'Foo <br>';
    function bar2(){
        echo 'Bar <br>';
    }
}

//bar3(); // will give an error
// function foo4(){
//     echo 'Foo <br>';
//     function bar3(){
//         echo 'Bar <br>';
//     }
// }

function foo5(): int{
    return '1';
}
var_dump(foo5());

// function foo6(): int{
    //     return ['1']; // will give an error
    // }
    // var_dump(foo6());
    
    function foo6(): void{
        return;
    }
    var_dump(foo6());
    
    // function foo7(): void{
        //     return null; // will give an error
        // }
        // var_dump(foo7());
        
        function foo8(): ?int{
            return null;
        }
        var_dump(foo8());
        
        // function foo9(): int{
            //     return null; //will give an error
            // }
            // var_dump(foo9());
            
            function foo10(): int{
                return 1.5;
            }
            var_dump(foo10());
            
            function foo11(): int|float{
                return 1.5;
            }
            var_dump(foo11());

            function foo12(): int|float|array{
                return [1.5];
            }
            var_dump(foo12());

            function foo13(): mixed{ // u cant use the nullable ? with mixed 
                return [1.5];
            }
            var_dump(foo13());
echo '<hr>';

//-----------------------------------------------------------------------
//23-PHP_Function_Parameters_-_Named_Arguments_-_Variadic_Functions_Unpacking_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 23</u></h3>";

function fo1(int|float $x, int|float $y=10){ // u can set a scalar array or null values as default but it cannot be a function call or an object or things like that , it has to be a constant expression 
    return $x * $y;                          // u must have the optional parameters after the required parameters 
}
echo fo1(5.0) . '<br>';

function fo2(int|float $x, int|float $y=10){
    return $x * $y;
}
echo fo2(5.0, 100) . '<br>';

function fo3(int|float $x, int|float $y){
    if($x % 2 === 0){
        $x /= 2;
    }
    return $x * $y;
}
$a = 6.0; $b = 7;
echo fo3($a, $b) . '<br>';
var_dump($a, $b);

function fo4(int|float &$x, int|float $y){
    if($x % 2 === 0){
        $x /= 2;
    }
    return $x * $y;
}
$a = 6.0; $b = 7;
echo fo4($a, $b) . '<br>';
var_dump($a, $b);

function sum2(int|float &$x, int|float $y){
    return $x + $y;
}
$a = 6.0; $b = 7;
echo sum2($a, $b) . '<br>';

// variadic functions are functions that accept variable number of arguments
function sum3(...$numbers){
    $sum =0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}
$a = 6.0; $b = 7;
echo sum3($a, $b, 50, 100, 25, 8, 9) . '<br>';

function sum4(...$numbers){
   return array_sum($numbers);
}
$a = 6.0; $b = 7;
echo sum4($a, $b, 50, 100, 25, 8, 9) . '<br>';

function sum5(int|float $x, int|float $y, ...$numbers){
   return $x +  $y + array_sum($numbers);
}
$a = 6.0; $b = 7;
echo sum5($a, $b, 50, 100, 25, 8, 9) . '<br>';

// declare(strict_types=1); it will not give an error for sum 6 but will give an error for sum7
function sum6(int|float $x, int|float $y, ...$numbers){
   return $x +  $y + array_sum($numbers);
}
$a = 6.0; $b = 7;
echo sum6($a, $b, 50, 100, 25.5, "8", 9) . '<br>';

function sum7(int|float $x, int|float $y, int|float ...$numbers){
   return $x +  $y + array_sum($numbers);
}
$a = 6.0; $b = 7;
echo sum7($a, $b, 50, 100, 25.5, "8", 9) . '<br>';

function sum8(int|float $x, int|float $y, int|float ...$numbers){
   return $x +  $y + array_sum($numbers);
}
$a = 6.0; $b = 7;
$numbers = [50, 100, 25.5, "8", 9];
echo sum8($a, $b, ...$numbers) . '<br>';

function fooo1(int $x , int $y){
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}
$x = 6; $y = 3;
echo fooo1($x , $y) . '<br>';

//named arguments allows you to pass arguments to the function based on the parameter variable name which means that it doesn't have to be in order
function fooo2(int $x , int $y){
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}
$x = 6; $y = 3;
echo fooo2($y , $x) . '<br>';

function fooo3(int $x , int $y){
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}
$x = 6; $y = 3;
echo fooo3(y:$y , x:$x) . '<br>';

function fooo4(int $x , int $y){
    var_dump($x , $y);
    if($x % $y === 0){
        return $x / $y;
    }
    return $x;
}
$arr = ['y' =>2 , 'x' => 1]; // the keys will be treated as an argument name
echo fooo4(...$arr) . '<br>';

// function fooo5(int $x , int $y){
//     var_dump($x , $y);
//     if($x % $y === 0){
//         return $x / $y;
//     }
//     return $x;
// }
// $arr = [2 , 'x' => 1]; // this will give an error because the first value will be treated as x value
// echo fooo5(...$arr) . '<br>';
echo '<hr>';


//-----------------------------------------------------------------------
//24-PHP_Variable_Scopes_-_Static_Variables_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 24</u></h3>";

// for the most part , variables in php only have a single scope and it spans with the inlcluded and required files as well 
$x = 5; // this is a global variable 
include('script1.php');
echo $x . '<br>';

function bo(){
    $x = 1; // this is a local variable
    echo $x . '<br>';
}
bo();

function bo1($x){   
    echo $x . '<br>';
}
bo1($x);

function bo2(){   
    global $x; // this will make $x accessiable within the function
    echo $x . '<br>';
}
bo2();

function bo3(){   
    global $x;
    $x = 20;
    echo $x . '<br>';
}
bo3();
echo $x . '<br>' ;

/* php stores global variables in an assositavie array called globals
 where the key is the variable name and the value is the variable value
 the globals variable here its what is called the super globals and php
 offer some more super globals that u can use , this super global and 
 global variables in general are something u should avoid at all costs 
 it makes the code harder to read , harder to maintain , and alot easier
 to introduce bugs , instead doing it like this u should use the function
 prameters and the function returns to get the data in or out the function
*/
function bo4(){   
    echo $GLOBALS['x'] . '<br>';
}
bo4();

function bo5(){   
    $GLOBALS['x'] = 30;
    echo $GLOBALS['x'] . '<br>';
}
bo5();

/* static variable is a regular variable with the local scope , the difference
is that the regular variable gets destroyed outside of the scope boundary 
while the static variable is not get destroyed and it retains its value
*/

// function getvalue(){
//     $value = someVeryExpensiveFunction();
//     return $value;
// }
// function someVeryExpensiveFunction(){
//     sleep(2);
//     echo 'Processing';
//     return 10;
// }
// echo getvalue() . '<br>';
// echo getvalue() . '<br>';
// echo getvalue() . '<br>'; // here we will wait 6 sec to print 10 3 times and will print 'Processing' 3 times

// function getvalue1(){
//     static $value1 = null; // using the static keyword will cash the value into the memory so when we call it again it will not do the same processing again , instead it will get the value from the memory 
//    if($value1 === null){
//     $value1 = someVeryExpensiveFunction1();
//    }
// }
// function someVeryExpensiveFunction1(){
//     sleep(2);
//     echo 'Processing';
//     return 100;
// }
// echo getvalue1() . '<br>';
// echo getvalue1() . '<br>';
// echo getvalue1() . '<br>'; // here we will wait only 2 sec and will print 'Processing' only 1 time
echo '<hr>';


//---------------------------------------------------------------------
//25-Variable_Anonymous_Callable_Closure_Arrow_Functions_In_PHP_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 25</u></h3>";

function summ(int|float ...$numbers): int|float{
    return array_sum($numbers);
}
$x = 'summ';
echo $x (1, 2, 3, 4). '<br>';

function sub(int|float ...$numbers): int|float{
    return array_sum($numbers);
}
$x = 'summ1';
if(is_callable($x)){
echo $x (1, 2, 3, 4). '<br>';
}else{
    echo 'Not Callable <br>';
}
/* quick note that a variable functions will not work with the language
constructs like (isset,empty,unset,print,echo,include,require)and so on
u would need to creat a wraber function around them and call those instead , 
u could also call (objects,methods) using variable functions syntax
*/

 $sum = function (int|float ...$numbers): int|float{
    return array_sum($numbers);
}; 
echo $sum(1, 2, 3, 4) . '<br>';

$x = 1000;
 $sum = function (int|float ...$numbers)use ($x): int|float{
    echo $x . '<br>';
    return array_sum($numbers);
}; 
echo $sum(1, 2, 3, 4) . '<br>';

$x = 1000;
 $sum = function (int|float ...$numbers)use ($x): int|float{
    $x = 1500;
    echo $x . '<br>';
    return array_sum($numbers);
}; 
echo $sum(1, 2, 3, 4) . '<br>';
echo $x . '<br>';

$x = 1000;
 $sum = function (int|float ...$numbers)use (&$x): int|float{
    $x = 1500;
    echo $x . '<br>';
    return array_sum($numbers);
}; 
echo $sum(1, 2, 3, 4) . '<br>';
echo $x . '<br>';

/*when a function is passed to another function as an argument and then is
called withn that function is is called a callback function , php has alot
of built in functions that expect callback functions as an arguments like 
(array_map,array_filter,usort,...etc)
*/
$array=[1, 2, 3, 4];
$array2 = array_map(function($element){
    return $element * 2;
}, $array);
echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';

$array=[1, 2, 3, 4];
$x = function($element){
    return $element * 2;
};
$array2 = array_map($x, $array);
echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';

$array=[1, 2, 3, 4];

 function boo1($element){
    return $element * 2;
};
$array2 = array_map('boo1', $array);
echo '<pre>';
print_r($array);
print_r($array2);
echo '</pre>';

$sum = function (callable $callback,int|float ...$numbers): int|float{
    return $callback(array_sum($numbers));
}; 
echo $sum('boo1', 1, 2, 3, 4) . '<br>';

echo $sum(function ($element){
    return $element * 2;
},1, 2, 3, 4) . '<br>';// anonymous functions basicaly are instances of closures

$sum = function (closure $callback,int|float ...$numbers): int|float{
    return $callback(array_sum($numbers));
}; 
echo $sum(function ($element){
    return $element * 2;
},1, 2, 3, 4) . '<br>';// closure must be an anonymus function , but callable can be a normal function

$array=[1, 2, 3, 4];
$array2 = array_map(fn($number) => $number * $number, $array);
echo '<pre>';
print_r($array2);
echo '</pre>';

$array=[1, 2, 3, 4];
$y = 5;
$array2 = array_map(fn($number) => $number * $number *$y, $array);
echo '<pre>';
print_r($array2);
echo '</pre>';
/* as a note here , arrow functions use the variables from  the parent scope
with the by value variable binding which means that u can not modify the
variable that was defined by the parent scope within the arrow function
*/

$array=[1, 2, 3, 4];
$y = 5;
$array2 = array_map(fn($number) => $number * $number * ++$y, $array);
echo '<pre>';
print_r($array2);
echo '</pre>';
echo $y;
echo '<hr>';

//---------------------------------------------------------------
// 26-How_To_Work_With_Dates_Time_Zones_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 26</u></h3>";

echo time() . '<br>';
$currenttime = time();
echo $currenttime + 5 * 24 * 60 * 60 . '<br>';
echo $currenttime - 24 * 60 * 60 . '<br>';

echo date_default_timezone_set('Africa/Cairo') . '<br>';
echo date('d/m/Y g:ia') . '<br>';
echo date('d/m/Y g:ia', $currenttime + 5 * 24 * 60 * 60) . '<br>';
echo date('d/m/Y g:ia', $currenttime - 24 * 60 * 60) . '<br>';
echo date_default_timezone_get() . '<br>';
echo '############ <br>';

date_default_timezone_set('America/Mexico_City');
echo date('d/m/Y g:ia') . '<br>';
echo date('d/m/Y g:ia', $currenttime + 5 * 24 * 60 * 60) . '<br>';
echo date('d/m/Y g:ia', $currenttime - 24 * 60 * 60) . '<br>';
echo date_default_timezone_get() . '<br>';
echo '############ <br>';

date_default_timezone_set('Africa/Cairo') . '<br>';
echo mktime(0,0,0,3,23, null) . '<br>';
echo date('d/m/Y D', mktime(0,0,0,3,23, null)) . '<br>';
echo strtotime("19-06-2023 1:00:00") . '<br>';
echo date('d/m/Y D', strtotime("19-06-2023 1:00:00")) . '<br>';
echo date('d/m/Y D', strtotime('tomorrow')) . '<br>';
echo date('d/m/Y D', strtotime('last day of march ')) . '<br>';
echo date('d/m/Y D', strtotime('second friday of march ')) . '<br>';

$date = date('d/m/Y D', strtotime('second friday of march ')) . '<br>';
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';

echo '<pre>';
print_r(date_parse_from_format('d/m/y',$date));
echo '</pre>';
echo '<hr>';

//------------------------------------------------------------
// 27-How_To_Work_With_Arrays_In_PHP_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 27</u></h3>";

function printarray(array $value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
// array_chunk(array $array, int $length, biil $preservekeys = false): array
echo 'array_chunck';
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
printarray(array_chunk($items, 2));
printarray(array_chunk($items, 2, true));

// array combine(array $keys, array $values): array
echo 'array_combine';
$array1 = ['a', 'b', 'c'];
$array2 = [5, 10, 15];
printarray(array_combine($array1, $array2)); // if size didn't match it will throw an error

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array
echo 'array_filter';
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$even = array_filter($array, fn($number) => $number % 2 === 0);
printarray($even);
$even1 = array_values($even);
printarray($even1);
$even = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_KEY);
printarray($even);
$even = array_filter($array, fn($number) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);
printarray($even);
$array = [1, 2, 3, 0, 5, [], 7, 0.0, '', 10];
$even = array_filter($array);
printarray($even);

// array_keys
echo 'array_keys';
$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];
$keys = array_keys($array);
printarray($keys);
$keys = array_keys($array, 10);
printarray($keys);
$keys = array_keys($array, 15);
printarray($keys);
$keys = array_keys($array, '15');
printarray($keys);
$keys = array_keys($array, '15', true);
printarray($keys);

//array_map(calllable|null $callback, array $array, array ...$arrays): array
echo 'array_map';
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = array_map(fn($number) => $number * 3, $array);
printarray($array);
$array1 = ['a' => 1,'b' => 2,'c' => 3];
$array2 = ['d' => 4,'e' => 5,'f' => 6];
$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);
printarray($array);

$array1 = ['a' => 1,'b' => 2];
$array2 = ['d' => 4,'e' => 5,'f' => 6];
$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);
printarray($array);
$array = array_map(fn($number1, $number2) => $number1 + $number2, $array1, $array2);
printarray($array);
$array = array_map(null, $array1, $array2);
printarray($array);

//array_merge(array ...$arrays): array
echo 'array_merge';
$array1 = ['a' => 1,'b' => 2,'c' => 3];
$array2 = [6 => 4, 7 => 5, 8 => 6];
$array3 = [7, 8, 'd' => 9, 'b' => 10];
$merged = array_merge($array1, $array2, $array3);
printarray($merged);

//array_reduce(array $array, callable $callback, mixed $initialvalue = null): mixed
echo 'array_reduce <br>';
$invoiceItems = [
    ['price' => 9.99,  'qty' => 3, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149,   'qty' => 1, 'desc' => 'Item 3'],
    ['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
    ['price' => 4.99,  'qty' => 4, 'desc' => 'Item 5'],
];
$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price']);
echo $total . '<br>';
$total = array_reduce($invoiceItems, fn($sum, $item) => $sum + $item['qty'] * $item['price'], 500);
echo $total . '<br>';

//array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
echo 'array_search <br>';
$array = ['a', 'b', 'c', 'D', 'E', 'ab', 'cd', 'b', 'd'];
$key = array_search('b', $array);
echo $key . '<br>';
var_dump($key);
$key = array_search('D', $array);
var_dump($key);
$key = array_search('a', $array);
var_dump($key);
$key = array_search('sawe', $array);
echo $key . '<br>';
var_dump($key);
$key = array_search('a', $array);
if($key == false){
    echo 'Letter not Found <br>';
}else {
    echo 'Letter is found and it is ' . $array[$key];
}
if($key === false){
    echo 'Letter not Found';
}else {
    echo 'Letter is found and it is ' . $array[$key] . '<br>';
}

// in_array
echo 'in_array <br>';
if(!in_array('a', $array)){
    echo 'Letter not Found';
}else {
    echo 'Letter is found and it is ' . $array[$key];
}
echo '<br>';

//array_diff() , array_diff_assoc()
echo 'array_diff , array_diff_assoc';
$array1 = ['a' => 1,'b' => 2,'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['d' => 4,'g' => 5,'i' => 6, 'j' => 7, 'k' => 8];
$array3 = ['l' => 3,'m' => 9,'n' => 10];
printarray(array_diff($array1, $array2, $array3));
printarray(array_diff($array1, $array1));
printarray(array_diff_assoc($array1, $array2, $array3));
printarray(array_diff_key($array1, $array2, $array3));

//asort
echo 'asort';
$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2 , 2 => 'f'];
printarray($array);
asort($array);
printarray($array);
ksort($array);
printarray($array);
usort($array, fn($a, $b) => $a <=> $b);
printarray($array);
usort($array, fn($a, $b) => $b <=> $a);
printarray($array);

//array distructure List => is a language construct
$array = [1, 2, 3, 4];
List($a, $b, $c, $d) = $array;
//[$a, $b, $c, $d] = $array;
echo $a .',' . $b . ',' . $c . ',' . $d . ',<br>' ;
[$a , , $c , $d] = $array;
echo $a .','  . $c . ',' . $d . ',<br>';
$array = [1, 2, [3, 4]];
[$a, $b, [$c, $d]] = $array;
echo $a .',' . $b . ',' . $c . ',' . $d . ',<br>' ;
$array = [1, 2, 3];
[1 => $a, 2 => $b,0 => $c] = $array;
echo $a .',' . $b . ',' . $c . ',<br>' ;
echo '<hr>';

// 28-How_To_Work_With_PHPs_Configuration_File_-_PHP.INI_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 28</u></h3>";

// error_reporting, error_log, display_errors
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);
// ini_set('error_reporting', E_ALL & ~E_WARNING);
var_dump(ini_get('display_errors'));
// ini_set('display_errors', 0);
// $array = [1];
// echo $array[3];
// ini_set('max_execution_time', 3);
// sleep(5);
// echo 'Hello World';
var_dump(ini_get('memory_limit'));
$string = 'X';
// for($i = 0; $i <1000; $i++){
//     $string .= $string;
// }
// echo $string;
// ini_set('memory_limit', -1);
// for($i = 0; $i <600; $i++){
//     $string .= $string;
// }
// echo $string;
echo '<hr>';


// 29-PHP_Error_Handling_Error_Handlers_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 29</u></h3>";

error_reporting(0); // this will not display any errors at all
error_reporting(E_ALL & ~E_WARNING); // this will report all errors but not warrnings
error_reporting(E_ALL); // this will report all errors and warrnings

// trigger_error('Example error', E_USER_ERROR); // this will throw an error and stop the script
// echo 1;
// trigger_error('Example error', E_USER_WARNING); // this will throw a warning and will not stop the script
// echo 1;
/* E_USER_ERROR & E_USER_WARNING are like E_ERROR & E_WARNING constants but
the difference is that the one with the user are generated manually by
using error trigger function
*/
// trigger_error('Example error', E_WARNING); // this will throw a fatal error because we used E_WARNING instead of E_USER_WARNING
// echo 1;

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
    ) {
        echo $type . ':' . $msg . 'in' . $file . 'on line' . $line; 
        return false;
    }
    set_error_handler('errorHandler', E_ALL);
echo $asdwdasd;
echo 'Hello <br>';
// function errorHandler2(
//     int $type,
//     string $msg,
//     ?string $file = null,
//     ?int $line = null
//     ) {
//         echo $type . ':' . $msg . 'in' . $file . 'on line' . $line; 
//         exit;
//     }
//     set_error_handler('errorHandler2', E_ALL);
// echo $asdwdasd;
// echo 'Hello';


// 30-Basic_Apache_Webserver_Configuration_Virtual_Hosts_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 30</u></h3>";

// 31-Working_With_File_System_In_PHP_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 31</u></h3>";

$dir = scandir(__DIR__);
var_dump($dir);
var_dump($dir[3]);
var_dump(is_file($dir[3]));
var_dump(is_dir($dir[3]));
var_dump(is_dir($dir[1]));

// mkdir('foo');
// rmdir('foo');
// mkdir('foo/bar', recursive:true);
// rmdir('foo/bar');
// rmdir('foo');

if(file_exists('foo.txt')){
    echo filesize('foo.txt');
    echo '<br>';
    file_put_contents('foo.txt', "hello\nworld");
    clearstatcache();
    echo filesize('foo.txt');
}else{
    echo 'File Not Found';
}
echo '<br>';

/* something to be aware of here is that php will cashe the return values
of some of the file related functions for better performance and i am going to
post the link in the description for the full list but the function filesize
is one of them
*/

if(! file_exists('foo.txt')){
    echo 'file not found';
}
$file = fopen('foo.txt', 'r');
var_dump($file);

/* the result of fopen is whats called a resource and a resource is a data 
type that we haven't covered yet , the resource is just avariable that 
refers to an external resource , it is a refrence to that external resource 
which can be stream , file , .. etc ,there are functions in php that create,  
return and work with resources and fopen is one of them.
in addation to openining local files , you could also open remote files by
specifing URL , but that might not always work because opening files remotely
might be disabled by the server.
*/

while(($line = fgets($file)) !== false){
    echo $line . '<br>';
}
fclose($file);
/* note the use of a strict comparison here because the return value from 
fgets might be a value that could evaluate to a false , so doing a loose
comparison could result to an unexpected bugs
*/

$file2 = fopen('foo2.txt', 'r');
while(($line = fgetcsv($file2)) !== false){
    printarray($line);
}

$content = file_get_contents('foo.txt');
echo $content . '<br>';
$content = file_get_contents('foo.txt', offset:3, length:2);
echo $content . '<br>';
file_put_contents('bar.txt', 'Hello');
file_put_contents('bar.txt', 'world');
file_put_contents('bar.txt', 'Hello');
file_put_contents('bar.txt', 'world', FILE_APPEND);
unlink('bar.txt');
copy('foo.txt', 'bar.txt');
//rename('foo.txt', 'bar.txt');

/* it will not be a nessesarly to use file_get_contents to get the content
of a remote file , there is a better way to get the content of a file from 
a remote server and make http request by using a library called curl and 
we will cover curl in a seprate video.
*/
echo '<hr>';

// 32-Mini_Exercise_Project_Overview_-_Full_PHP_8_Tutorial
echo "<u><h3>Lesson 32</u></h3>";

// 33-Building small part of application with procedural php


