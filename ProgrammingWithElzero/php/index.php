<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 

// --------------- Lesson 4(PHP Tags & Instruction Sepration) ---------
echo "<h3>Lesson 4</h3>";
echo 'we love php'; // echo is a built in fn to print a string
print '<br>'; // print is a built in fn to print a string
?> <?= 'we love php with short tag' ?> //short tag
<?php
echo '<hr>';

// -------------- Lesson 5(Comments & Best Practices) ------------------
echo "<h3>Lesson 5</h3>";
// single line comment
echo 'Test';// single line comment
echo 'Test';# single line comment

/*
Line 1
line 2
*/

/*
==============================
====== My Special App ========
==============================
*/
echo 'Test' /*single Line */;echo '<hr>';

// -----------------Lesson 6(Introduction to data types)--------
echo "<h3>Lesson 6</h3>";
/* 
    Data Types
        
        bool ==> Boolean
        int ==> Integer
        float ==> Floating Point Number | double
        string 
        array
        Other Types
        gettype()
*/
echo gettype(true). '<br>'. gettype(fAlSe). '<br>';
echo gettype(100).'<br>'. gettype(0). '<br>';
echo gettype(-2). '<br>'. gettype(70.5). '<br>';
echo gettype(-70.5). '<br>'. gettype('hassan'). '<br>'.'<br>';
echo gettype('-70.5'+5). '<br>'.gettype('"50"').'<br>';
echo gettype(array("EG"=>"Egypt","KSA"=>"Suadi Arabia")). '<br>';
echo gettype(array("Egypt","Suadi Arabia")). '<br>';
echo gettype(["Egypt","Suadi Arabia"]).'<br>'. '<hr>';

// ----- Lesson 7(Type Juggling And Automatic Type Conversion) -------
echo "<h3>Lesson 7</h3>";

echo 1 + "2". '<br>';
echo gettype(1 + "2"); /*Integer --> Notice:the output data are converted 
to integer as the input data are integer + string , the conversion happened
to the output only */echo '<br>';
echo true. '<br>';echo gettype(true).'<br>';
echo true + true. '<br>'. gettype(true + true). '<br>';
echo 5 + '5 Lessons'.'<br>'. gettype(5 + '5 Lessons'). '<br>';
echo 10+15.5. '<br>'. gettype(10+15.5). '<hr>';

// ----------------- Lesson 8(Type Casting) ---------------------------
echo "<h3>Lesson 8</h3>";
/*
Type Casting 
"boolean" or "bool"
"integer" or "int"
"float" or "double" or "real"
"string"
"array"
"object"
"null"
#Search For Settype
*/

echo 5 + (int)"5 lessons". '<br>'. 5 + (integer)"5 lessons". '<br>';
echo gettype( 5 + (int)"5 lessons"). '<br>'. 10 + (int)15.5.'<br>';
echo gettype(10 + (int)15.5). '<br>'. 10.5+10.5. '<br>';
echo gettype(10.5 + 10.5).'<br>'. (int) 10.5+ (int)10.5. '<br>';
echo gettype((int) 10.5+ (int)10.5). '<br>'. (int)(10.5 + 10.5). '<hr>';

// ----------- Lesson 9(Boolean And Converting To Boolean) -----------
echo "<h3>Lesson 9</h3>";

var_dump((bool)""); /*built in fn that gives u details about the data u put it ,
 varDump echos the data automatically*/
var_dump((bool)array());var_dump((bool)[]);
var_dump((bool)0);var_dump((bool)"0");
var_dump((bool)"hassan");var_dump((bool)array(1));
var_dump((bool)[1]);var_dump((bool)[0]);
var_dump((bool)100);var_dump((bool)-100);
var_dump((bool)10.5);echo '<hr>'. (bool) 5 . (bool) "0". "<hr>";

// -------------- Lesson 10(String And Escaping) ---------------------
echo "<h3>Lesson 10</h3>";
/*
nl2br() --> new line to break
*/

echo 'Hello PHP" ;<br>'. "Hello PHP' <br>";
echo "Hello 'PHP'".'<br>'. 'Hello "PHP"'. '<br>';
echo 'Hello \'PHP\''. '<br>'. "Hello \"PHP\"". '<br>';
echo "Hello \;'PHP\\.;'". '<br>';
echo 'Hello PHP
On Multiple 
Lines <br>';
echo nl2br('Hello PHP 
On Multiple 
Lines');echo '<hr>';

// ---------------- Lesson 11(Heredoc And Nowdoc) --------------------
echo "<h3>Lesson 11</h3>";
$name = "Hassan";

//Heredoc
echo <<<"Here"
Hello PHP
Special Characters $$$ ''''' """"" \\\\\
Hello My Name Is $name <?php ?>
Here;
echo '<br>';

//Nowdoc
echo <<<'Now'
Hello PHP
Special Characters $$$ ''''' """"" \\\\\
Hello My Name Is $name <?php ?>
Now;
echo '<br>';

echo "<ul><li> $name </li><li> $name </li>
<li> $name</li><li>$name</li></ul>";

echo <<<"navlinks"
<ul> <li>$name</li> <li>$name</li> <li>$name</li> <li>$name</li></ul>
navlinks; echo '<hr>';

// -------------- Lesson 12(Array With Complex Tests) ----------------
echo "<h3>Lesson 12</h3>";
/*
    Array With Key
    Array Without Key
    Array With One Key
    Array Value Override
    ---------------------
    print_r()
*/

echo '<pre>';
print_r([
    "0"=>"Sameh","A"=>"Ahmed","B"=>"Bassem","Mahmoud",true=>"Sayed",
    "1"=>"Osama","Mahmoud","Gamal",9=>"Amera","Eman","Mohamed",false=>"Asmaa",
    8=>"Hytham","Samer","Names" =>["Osama","Hassan","Sayed"=>["1","2","3"]]
]); echo "</pre>"; echo '<hr>';

// -------- Lesson 13(Introduction To Variable And Naming Rules) --------
echo "<h3>Lesson 13</h3>";
/*
    Variables
        Naming Rules + Info
    1- Start With Dollar Sign $
    2- Start With A Letter [a-z] Or [A-Z] Underscore
    3- You Can Use Numbers Inside The Name
    4- No Special Characters Allowed
    5- Case Sensitive
        Test Single And Double Quotes

    Search
        Loosely Typed Language
*/

$username = "Hassan";$Username = "Elmalik";

echo $username;echo '<br>';echo $Username;echo '<br>';
echo  'Hello $username';echo '<br>';echo "Hello $username";echo '<hr>';

// ---------- Lesson 14(Testing Variables In Real World) -----------------
echo "<h3>Lesson 14</h3>";

include("test.php");echo '<hr>';

// ------------------ Lesson 15(Variable Variable) -----------------------
echo "<h3>Lesson 15</h3>";
# Takes The Value Of A Variable And Treats It As The Name Of A Variable

$a = "hassan";$$a = "elmalik";$$$a = "school";

echo $a;echo '<br>';echo $$a;echo '<br>';echo $hassan;echo '<br>';
echo $$$a;echo '<br>';echo $elmalik;echo '<br>';

echo "Hello $$a";echo '<br>';echo "Hello {$$a}";echo '<br>';
echo "Hello {$$$a}";echo '<hr>';

// ----------- Lesson 16(Assign By Value And By Refrence) -----------------
echo "<h3>Lesson 16</h3>";
/*
By Default , Variables Are Always Assigned By Value
Assigned By Reference Make Variable Alias Or Point To Another

Search 
    References Are Not Pointers
*/

$a = "Hassan"; $b=&$a; $b = "ElMalik"; $a="school";

echo $a;echo '<br>';echo $b;echo '<hr>';

// -------------- Lesson 17(Predefined Variables And Test) ---------------
echo "<h3>Lesson 17</h3>";
# Search Pre-Defined Variables

//echo '<pre>';
//print_r($_SERVER);
echo $_SERVER["HTTP_CONNECTION"].'<br>';
echo $_POST["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="" method="post">
    <input type="text" name="username" placeholder="inseret username">
    <input type="submit" Value="send">
</form> 
<?php
echo '<hr>';
// --------------- Lesson 18(Introduction To Constants) ------------------
echo "<h3>Lesson 18</h3>";
/*
    Constants
        That Value Cannot Change During The Execution
        Constants Always Uppercase
*/

define("DB_NAME","elmalik");
define("MAIN_NUMBER",5); /* cannot creat another constant with the same 
name (MAIN_NUMBER) and put another Value Like this 
define("MAIN_NUMBER",10) */

echo DB_NAME;  echo '<br>';echo MAIN_NUMBER * 50;echo '<hr>';

// --- Lesson 19(Predefined And Magic Constants And Reserved Keywords) ---
echo "<h3>Lesson 19</h3>";
/*
    Pre-Defined Constants [Case Sensitive]
        PHP_VERSION
        PHP_OS_FAMILY
        PHP_INT_MAX
        DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
        __LINE__
        __FILE__
        __DIR__

    Reserved Keywords
        break
        clone

    Search
        PHP predefined Constants
        Compile Tive vs Runtime
        List Of Reserved Words
*/

define ("BREAKS","AA"); // u cannot define a reserved name as a constant
$clone = 2;

echo php_uname();echo '<br>';echo PHP_VERSION;echo '<br>';
echo __LINE__;echo '<br>';echo __FILE__;echo '<br>';
echo __diR__;echo '<br>';echo BREAKS;echo '<br>';echo $clone;echo '<br>';

//no problem here
function hello(){ return "Hello";}echo hello();

// Syntax Error ==> reserved word
// function clone(){
//     return "clone";
// }
// echo clone();
echo "<hr>";

// ---------------- Lesson 20(Arithmetic Operators) ---------------------
echo "<h3>Lesson 20</h3>";
/*
    Operators
        Used To Perform Operations On Values
    Arithmetic Operators
        Used To Do Arithmetical Operations & Conversion

        $a [+] $b => Addition
        $a [-] $b => Subtraction
        $a [*] $b => Multiplication
        $a [/] $b => Division
        $a [%] $b => Modulus
        $a [**] $b => Exponentiation
        +$a       => Identity
        -$a       => Negation
*/

echo 10 +20 . "<br>". gettype(10+20). "<br>";
echo 9.5 +20.5 ."<br>". gettype(9.5+20.5). "<br>";
echo 10 -20 ."<br>".gettype(10-20)."<br>";
echo 9.5 -20.5 . "<br>". gettype(9.5-20.5)."<br>";
echo 10 *20 . "<br>". gettype(10*20). "<br>";
echo 9.5 *20.5 ."<br>".gettype(9.5*20.5)."<br>";
echo 20/10 ."<br>".gettype(20/10)."<br>";
echo 20/8 ."<br>".gettype(20/8)."<br>";

echo 21%10 ."<br>". 23%10 ."<br>". 29%10 ."<br>";
echo 30%10 ."<br>". 21%8 ."<br>". 21%4 ."<br>";

echo 2 ** 4 ."<br>". 3 ** 5 ."<br>";

echo "100<br>".gettype("100")."<br>";
echo +"100"."<br>". gettype(+"100"). "<br>";
echo +"100 test". "<br>". "-100"."<br>";

echo gettype("-100")."<br>". -"-100". "<br>";
echo gettype(-"-100"). "<br>". -"100"."<br>";
echo gettype(-"100")."<br>". gettype((int)"100 test") . "<hr>";

// ----------------- Lesson 21(Assignment Operators) ----------------
echo "<h3>Lesson 21</h3>";
/*
    Assignment Operators
        Used To Write Value To Another

        $a [+=] $b => Addation
        $a [-=] $b => Subtraction
        $a [*=] $b => Multiplication
        $a [/=] $b => division
        $a [%=] $b => Modulus
        $a [=] $b => Exponentiation
*/

$a = 10;  $a +=20; // $a = $a +20;
echo $a."<br>";

$b = 20;  $b -=5; // $b = $b-5;
echo $b."<br>";

$c=4;    $c**=4; // $c=$c**4;
echo $c ."<hr>";

// ---------------- Lesson 22(Comparison Operators 1) --------------------
echo "<h3>Lesson 22</h3>";
/*
    Comparison Operators
        Used To Compare Two Values
        Part 1
        ==  => Equal           only comapers the values
        !=  => Not Equal
        <>  => Not Equal
        === => Identical       compares the value and the type
        !== => Not Identical
*/

// Test Equal
var_dump(100 == 100);var_dump(100 == "100");
var_dump(100.0 == "100");var_dump(100.0 != 100);
var_dump(100.0 <> 100);echo "###########";echo "<br>";
// Test Identical
var_dump(100 === 100);var_dump(100 === "100");
var_dump(100.0 === "100");var_dump(100.0 === 100);
var_dump(100.0 !== "100");var_dump(100.0 !== 100);echo '<HR>';

// ------------- Lesson 23(Comparison Operators 2) --------------------
echo "<h3>Lesson 23</h3>";
/*
    Part 2
    >        ==> Larger Than
    >=       ==> Larger Than Or Equal
    <        ==> Smaller Than
    <=       ==> Smaller Than Or Equal
    <=>      ==> Spaceship [Less Than,Equal Or Greater]

    Search
        How Does PHP Compare Strings With Comparison Operators
*/

var_dump(100>50);     var_dump(100>100);
var_dump(100>=100);   var_dump(100>=110);
var_dump(100<50);     var_dump(100<=50);
var_dump(100<=>200);  var_dump(100<=>100);
var_dump(100<=>50);   echo "<hr>";

// --------------- Lesson 24(Increment And Decrement Operators) -----------
echo "<h3>Lesson 24</h3>";
/* 
    Incrementing & Decrementing Operators
        Increase And Decrease Values
*/

$Likes=0; $Likes++;$Likes++; $Likes++; $Likes--;
echo $Likes;echo '<br>';

$a=0;echo $a++;echo '<br>';echo $a;

$ez= 0;echo '<br>';echo ++$ez;echo '<br>';echo $ez;echo '<br>';

$e=0;echo $e--;echo '<br>';echo $e;

$b = 0;echo '<br>';echo --$b;echo '<br>';echo $b;echo '<hr>';

// ----------------- Lesson 25(Logical Operators) -----------------------
echo "<h3>Lesson 25</h3>";
/*
    Logical Operators
        Compare Conditions

    and => And => Two Are True
    && =>  And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or =>  or =>  One Or Both Is True
    || =>  Or =>  One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    ! =>   Not =>   Not True
*/

var_dump(100>50 and 100>80 and 100>90);
var_dump(100>50 && 100>80 && 100>100);
var_dump(100>50 or 100>110 || 100>100);
var_dump(100>50 xor 100>110 xor 100>100);
var_dump(100>50 xor 100>80 xor 100>30);
var_dump(100>50 xor 100>80 );
var_dump(100>100 xor 100>110 );  echo "<hr>";

// -------------------- Lesson 26(String Operators) --------------------
echo "<h3>Lesson 26</h3>";
/*
    String Operators
        Concatenate Strings

        .
        .=
*/

$as = "Elmallik"; $b="Web" ; $c="school";

define ("HASSAN","1");function testing(){ return 1;}
echo "$as $b $c <br>";  echo "{$as} {$b} {$c} <br>";
echo $as . " " . $b . " " . $c;echo "<br>";
echo "$as $b $c " . HASSAN . " " . testing();echo "<br>";
$x="Elmalik "; $x .= "Web"; $x .= " School";echo $x;echo "<hr>";

// ----------------- Lesson 27(Array Operators) ---------------------
echo "<h3>Lesson 27</h3>";
/*
    Array Operators
        Deal With Arrays

    +       => Union
    ==      => Equal => Same Key And Value
    !=      => Not Equal
    <>      => Not Equal
    ===     => Identical => Same Key And Value , Same Order , Same Type
    !==     => Not Identical
*/

$arr1 = [1=>"A",2=>"B"];$arr2 = [3=>"C",4=>"D"];$arr3 = $arr1 + $arr2;

echo '<pre>';print_r ($arr1+$arr2);print_r ($arr3);echo '</pre>';

$arr4 = [1=> "10" , 2=>"20" , 3 => 5.0];$arr5 = [3 => 5, 2=> 20 , 1=>10 ];
var_dump($arr4==$arr5);var_dump($arr4!=$arr5);var_dump($arr4<>$arr5);

$arr6=[1=>100 , 2=>200,];$arr7=[1=>100 , 2=>200];var_dump($arr6===$arr7);
echo "<hr>";

// ----------------- Lesson 28(Error Control Operator) -------------------
echo "<h3>Lesson 28</h3>";
/*
    Error Control Operator
        Control The Errors

    @
        Variable
        File
        Include
*/
//Variable
$s = 10;
@$b = $s  or die("Variable Not Found");
echo "Test $s <br>";

//File
$f = @file("hassan.text") or die("File Not Found");
echo "<pre>";print_r($f);echo "</pre>";

//Include
(@include ("hassan.php")) or die("Included File Not Found");
echo "<hr>";

// --------------- Lesson 29(Operator Precedence) ---------------------
echo "<h3>Lesson 29</h3>";
/*
    Operator Precedence
        "||" Has A Greater Precedence Than "or"
        "&&" Has A Greater Precedence Than "and"
*/

echo 2+4*5;echo "<br>";echo (2+4)*5;echo "<br>";
echo 10 || false || 0 || [] || "" ;echo "<br>";echo true;echo "<br>";
var_dump(10 || false || 0 || [] || "");echo "<br>";

echo 10||false;echo "<br>";$a = 10||false;echo $a;echo "<br>";
$b=10 or false;echo $b;echo "<br>";$e = 5 or 10 ;echo $e;echo "<hr>";

// ------------------- Lesson 30(IF,Elseif,Else) ------------------------
echo "<h3>Lesson 30</h3>";
/*
    Control Structure
        If, Elseif, Else <= Basics

    Syntax
        if (Condition){
            If Condition Is True <= Run Me
        }else {
            If Condition Is False <= Run Me
        }
*/

if (10>10){
    echo "First Condition";
}else if (10>20){
    echo "Second Condition";
}else {
    echo "No";
}echo "<hr>";

// ----------- Lesson 31(If,Elseif,Else - Real Life Examples) -------------
echo "<h3>Lesson 31</h3>";
$page = "About";
if($page == "About"){
    echo "This Is The Page";
}echo "<br>";

$title = "";
if ($title == ""){
    echo "Unknown Page";
}else {
    echo $title;
}echo "<br>";

$lang = "Unknown";
if ($lang == "Arabic"){
    echo "مرحبا";
}else if ($lang == "English"){
    echo "Hello";
}else if ($lang == "Spanish"){
    echo "Hola";
}else{
    echo "Unknown Language";
}echo "<hr>";

// ------------ Lesson 32(If,Elseif,Else - Advanced Practice) -------------
echo "<h3>Lesson 32</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <select name="lang" id="">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if($_POST["lang"] == 'ar'){
       include("ar.php");
    } elseif($_POST["lang"] == 'en'){
        include("en.php");
    } elseif($_POST["lang"] == 'es'){
        include("es.php");    
    }else{
        echo "Unknown Page";
    }
}echo "<hr>";

// ---------- Lesson 33(IF,Elseif,Else - Alternate Syntax) --------------
echo "<h3>Lesson 33</h3>";
// you can unuse the {} if it's only one line of code inside if
if(10>5){echo "Good";}else{echo "Bad";} echo "<br>";
if(10>5)echo "Good";else echo "Bad";echo "<br>"; 

if (10>5): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello Page
</body>
</html>

<?php endif; echo "<br>"; ?> 

<?php 
    if(10>10):
        echo "First";
    elseif(10>10):
        echo "Second";
    else:
        echo "Last";
    endif; echo "<hr>";
?>
<?php 

// ----------- Lesson 34(Nested If And Advanced Trainings) --------------
echo "<h3>Lesson 34</h3>";

$name = "hassan";
$country = "Egypt";
$is_student = true;
$is_orphan = true ;
$country_discount = 50;
$student_discount = 10;
$orphan_discount = 15;
$price = 100;

if($country == "Egypt"){

   
    if($is_student == true){

        if($is_orphan==true){
    echo "Hello $name";
    echo "<br>";
    echo "u have a Country Discount <br> and a Student Discount <br> and and Orphan Discount <br> The Final price is " . $price-$country_discount-$student_discount - $orphan_discount .'$';
        }
        else{
    echo "Hello $name";
    echo "<br>";
    echo "u have a country and a student discount <br> the price is " . $price-$country_discount-$student_discount .'$';
        }
    }elseif($is_orphan == true){
        echo "Hello $name <br> you have a country discount and an orphan discount <br> The Final Price Is " . $price - $country_discount - $orphan_discount .'$';
    }else{
    echo "Hello $name";
    echo "<br>";
    echo "ur country have a discount <br> the price is " . $price-$country_discount .'$';
    }

}else{
    echo "Hello $name";
    echo "<br>";
    echo "there is no discount , the price is " . $price .'$';
}echo "<hr>";

// ------------- Lesson 35(Ternary Conditional Operator) ---------------
echo "<h3>Lesson 35</h3>";
// Trenary Operator => Short If

$a = 10;
if ($a > 8){
    echo "Good";
}else {
    echo "Bad";
}
 echo "<br>";
// ternary => Condition ? True : False;

echo $a > 8 ?"Good" : "Bad" ;
echo "<br>";
echo "I Love PHP Because Its A";
if ($a > 8){
    echo "Good";
}else {
    echo "Bad";
}
echo " Language";
echo "<br>";
echo "I Love PHP Because Its A " . ($a>8?"Good":"Bad") . " Language";

$result = $a>8?"Good" :"Bad";
echo "<br>";
echo "I Love PHP Because Its A $result Language"; echo "<hr>";

// ---------------------- Lesson 36(Switch) ------------------------------
echo "<h3>Lesson 36</h3>";
/* 
    Control Structure 
        Switch

    Syntax
        switch (expression){
            Case 1:
                    Code Block 1
                break;
            Case 2:
                    Code Block 2
                break;
            Case 3:
                    Code Blcok 3
                break;
            Default:
                    Default Code Block
        }
*/

$day = "sat";

switch ($day){
    case "sat":
        echo "Hello today is $day we are open from 10:16";
        break;
    case "sun":
        echo "Hello today is $day we are open from 08:14";
        break;
    case "mon":
    case "thr":
        echo "Hello today is $day we are open from 12:18";
        break;
    default:
        echo "unknown day";
    
}echo "<hr>";

// ----------- Lesson 37(While Loop And The Concept Of Loop) -------------
echo "<h3>Lesson 37</h3>";
$i = 1;

while ($i<=3){
    echo "$i <br>";
    $i++;
}
$a = 1;

while ($a<=3):
    $a++;
    echo "$a <br>";
endwhile; echo "<hr>";

// ----------------------- Lesson 38(Do While) --------------------------
echo "<h3>Lesson 38</h3>";
$i = 4;

while ($i<=3){
    echo "$i <br>";
    $i++;
}

do {
    echo "$i <br>";
    $i++;
}while ($i<=3);

$index = 0;

while($index <= 100){
    echo "$index // ";
    $index += 5;
}echo "<hr>";

// ---------------------- Lesson 39(Loop For) -------------------------
echo "<h3>Lesson 39</h3>";
/*
    For
        Expression One Run Once At The First Of The Loop
        In The Begining Of Iteration Expression Two Is Checked 
        [If True Continue || Break]
        At The End Of Iteration Experssion Three Are Executed
*/

for ($i =1; $i<=3 ; $i++){
    echo "$i <br>";
}

$index = 1;
for(;;):
    if($index == 4):
        break;
    endif;
    echo "$index <br>";
    $index ++;
endfor; echo '<hr>';

// -------------------- Lesson 40(Loop Foreach) -------------------------
echo "<h3>Lesson 40</h3>";
$countries = ["EG","SA","QA","SY"];

echo '<pre>';
print_r ($countries);
echo '</pre>';

foreach($countries as $country){
    echo" $country //";
}

$countries_with_discount = ["EG"=> 50,"SA"=>30,"QA"=>50,"SY"=>70];

echo '<pre>';
print_r ($countries_with_discount);
echo '</pre>';

foreach($countries_with_discount as $con => $dis):
    echo " Country Name Is $con And Discount is $dis <br>";
endforeach; echo '<hr>';

// ----------------- Lesson 41(Break, Continue) ---------------------
echo "<h3>Lesson 41</h3>";
/*
    Break Ends Execution Of (For, Foreach, While, Do While or Switch)
    Skip Current Iteration
*/

$countries = ["EG","SA","QA","SY","USA","GER"];
foreach (["EG","SA","QA","SY","USA","GER"] as $country){
    if($country == "USA"){
        break;
    }
    echo " $country // ";
}echo '<br>';
foreach (["EG","SA","QA","SY","USA","GER"] as $country){
    if($country == "USA"){
        continue;
    }
    echo " $country // ";
}echo '<hr>';

// -------------------- Lesson 42(Include, Require) ----------------------
echo "<h3>Lesson 42</h3>";

include("variable.php");
echo $a . "<br>";
$a = 20;
include_once("variable.php");
echo $a . "<br>";
echo "continue"; echo '<hr>';

// -------- Lesson 43(Function Introduction And Dry Concept) ----------
echo "<h3>Lesson 43</h3>";
/*
    Function
        Introduction And DRY Concept (Don't Repeat Yourself)
        Parameter
        Argument
*/
echo "Hello Mr Hassan //";
echo "Hello Mr Nabil //";
echo "Hello Mr Elmalik"; echo "<br>";

function say_hello_to($someone){
    echo "Hello Mr $someone";
}

say_hello_to("Hassan //");
say_hello_to("Nabil //");
say_hello_to("Elmalik //");echo '<hr>';

// ---- Lesson 44(Advanced Examples With Parameters And Arguments) ----
echo "<h3>Lesson 44</h3>";
function say_hello($one,$two){
    echo "Hello Mr $one $two";
}
say_hello("Hassan","elmalik"); echo "<br>";

// function deep_freezer($item){
//     switch($item){
//         case "water" : echo "make it ice <br>";
//         break;
//         case "cocacola" : echo "make it cold <br>";
//         break;
//         case "fruit": echo "make it fresh <br>";
//         break;
//         default : echo "unknown item";
//     }
// }

function deep_freezer($item){
    if($item == "water"){
        echo "Make It Ice <br>";
    }
    elseif($item == "coca cola"){
        echo "Make It Cold <br>";
    }
    elseif($item == "fruits"){
        echo "Make It Fresh <br>";
    }else {
        echo "Unknown Item";
    }
}
deep_freezer("water");
deep_freezer("coca cola");
deep_freezer("fruits");
deep_freezer("remote");echo "<hr>";
// function deep_freezer2($item)
// {
//    echo  match ($item){
//     'water' => 'make it ice <br>',
//     'cocacola' => 'make it cold <br>',
//     'fruit' => 'make it fresh <br>',
//     default => 'unknown item',
//     };
// }
// deep_freezer2('water');
// deep_freezer2('cocacola');
// deep_freezer2('fruit');
// deep_freezer2('remote');

// -------------- Lesson 45(Function Return And Echo) -------------------
echo "<h3>Lesson 45</h3>";
/*
    Optional Return & Null
    End After Return
*/

$prizes = ["pc","playstation","xbox","apple tv","laptop","ipad"];

function get_number($num_one, $num_two){
    return $num_one + $num_two ;
    echo "will not Echo anything";
}

$prize_number = get_number(2,1);
var_dump($prize_number);

echo $prizes[get_number(2,1)]; echo '<hr>';

// ---------- Lesson 46(Function Default Parameter Value) --------------
echo "<h3>Lesson 46</h3>";
/*
    Function
        Default Parameter Value
        Using
        Test Data
        Skip Arguments
*/

function get_data($country="Private Country",$name="Private",$age ="Private",$address = "Private Address"){
    // if($address == ""){
    //     $address = "Private Address";
    // }
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your Age Is $age And You Live In $address";
    return $line_one . $line_two ;
}

echo get_data(name:"Hassan" , address:"khalil hamada");
echo '<br>';

// function get_data2(...$data)
// {
// if($data[3] == null){
//     $data[3] = 'Private address';
// }
//     $line1 = "Your country is $data[0] and your name is $data[1] <br>";
//     $line2 = "Your age is $data[2] and you live in $data[3]";
//     return $line1 . $line2 ;
// }

// echo @get_data2( 'egypt', 'hassan', 35);

function get_data3(...$data)
{
if($data[3] == null){
    $data[3] = 'Private address';
}
if($data[2] == null){
    $data[2] = 'Private age';
}
if($data[1] == null){
    $data[1] = 'Private name';
}
if($data[0] == null){
    $data[0] = 'Private country';
}
    $line1 = "Your country is $data[0] and your name is $data[1] <br>";
    $line2 = "Your age is $data[2] and you live in $data[3]";
    return $line1 . $line2 ;
}

$group_data = [];

$x = @get_data3( ...$group_data);
echo $x;
echo "<hr>";

// ------------- Lesson 47(Function Variable Arguments List) -------------
echo "<h3>Lesson 47</h3>";
/*
    Variable Arguments List
        func_num_args()
        func_get_arg(index)
        func_get_args()

    Spread Syntax In JS
*/

function calculate(...$nums){
    // echo "Number Of Arguments: " . func_num_args() . "<br>";
    // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
    // print_r(func_get_args());
    // echo "<br>";
    // $result = 0;
    // foreach(func_get_args() as $arg){
    //     $result += $arg;
    // }
    // echo $result;
    echo "Argument Index Number 3 Is " . $nums[4] . "<br>";
    echo "<br>";
    $result = 0;
    foreach($nums as $num){
        $result += $num;
    }
    echo $result;
}

calculate (30,20,60,80,50,100); echo "<hr>";

// -------- Lesson 48(Function Training And Unpacking Arguments) ---------
echo "<h3>Lesson 48</h3>";
/*
        Function Advanced Training
        Unpacking In Arguments 

    Search
        PHP Variadic Functions
        Splat Operator
*/

$group_of_skills = ["HTML","CSS","JS","PHP"];

function get_data1($name , $country="Private", ...$skills){
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill):
        echo "-- $skill <br> ";
    endforeach;
}
// get_data1 ("Hassan","Egypt",...$group_of_skills);
 get_data1 ("Hassan","Egypt",...["HTML","CSS","JS","PHP"]); echo "<hr>";

 // -------- Lesson 49(Function Variable And Function Exists) ------------
 echo "<h3>Lesson 49</h3>";
 /*
     Variable Function
        PHP Allow To Use Variable Like Function
        When You Append Parentheses () To Variable PHP Will Look For
        Function With That Name
    Fuction Exists
        function_exists("Func Name")
*/

function one(){
    return "One From Function";
}

$func1 = "one";

echo $func1(); echo "<br>";

function say_hello1($someone){
    echo "Hello $someone";
}
$func2 = "say_hello1";
$func2 ("hassan"); echo "<br>";

if(function_exists("testing1")){
    echo testing1();
}else {
    echo "function not found";
}
function testing1(){
    return "Testing From Function <br>";
}

echo strlen("Hassan");
$fun3 = "strlen"; echo "<br>";
echo $fun3 ("Elmalik"); echo "<hr>";

// - Lesson 50(Passing Arguments By Reference And Return Type Declaration) -
echo "<h3>Lesson 50</h3>";
/*
        Passing Arguments by Reference
            By Default, Function Arguments Are Passed By Value
            If The Value Of The Argument Inside The Function Changed 
            It will Not Change Outside 
            To Change It Outside Pass The Argument By Reference
            
        Return Type Declerations

    Search
        PHP Strict Mode
*/

function add_five($number){
    $number += 5;
    return $number;
}

$n = 15;
echo add_five($n) . "<br>";
echo $n; echo "<br>";

function add_five1(&$number){
    $number += 5;
    return $number;
}

$n = 15;
echo add_five1($n) . "<br>";
echo $n; echo "<br>";

function calculate1($n1,$n2){
    return $n1 + $n2 ;
}

echo calculate1(20.5,10);echo "<br>";
echo gettype(calculate1(10,20.5));echo "<br>";

function calculate2($n1,$n2):int{
    return $n1 + $n2 ;
}

echo calculate2(20.5,10);echo "<br>";
echo gettype(calculate2(10,20.7));echo "<hr>";

// ------------------ Lesson 51(Anonymous Function) --------------------- 
echo "<h3>Lesson 51</h3>";
/*
    Function
        Anonymous Function
            When We Creat A Function We Give It A Name So We Can Call 
            It Later With that Name
            Sometimes We Need To Creat A Function For Specific Task <= This
            Is Not Against DRY

        Variable Inherit From Parent Scope
        Variable Inherit By Reference From Parent Scope
        Anonymous Function Can Be Passed To A Function
        Anonymous Function Can Be Return From A Function
        
    Search 
        Closure
*/

#Anonymous Function In Variable

$say_hello = function(){
    return "Hello";
};
echo $say_hello(); echo "<br>";

#Anonymous Function With Parameter In Variable

$say_hola = function($someone){
    return "hola " . $someone;
};
echo $say_hola("Hassan");echo "<br>";

#Inherit Variable From Parent Scope

$msg="Hi";

$say_hi = function($someone) use($msg){
    return "$msg $someone";
};
echo $say_hi("Hassan");echo "<br>";

# Pass Anonymous Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

function adding_five($item){
    return $item +5;
}

// foreach ($nums as $num){
//     echo $num + 5;
// }

$nums_after_adding_5 = array_map("adding_five",$nums);

echo "<pre>";
print_r ($nums_after_adding_5);
echo "</pre>";

$nums_after_adding_10 = array_map (function ($item){return $item +10;},$nums);

echo "<pre>";
print_r ($nums_after_adding_10);
echo "</pre>"; echo '<hr>';

// ------------------- Lesson 52(Arrow Function) ----------------------
echo "<h3>Lesson 52</h3>";
/*
    Function
        Arrow Function
            Short Syntax For Anonymous Function
            Automatic Use Variables From Parent Scope

        Syntax
            Function Replaces With fn
            No Need For Curly Braces
            Return Is Omitted
*/

#Arrow Function In Variable 

$say_hello = fn() => "Hello";

echo $say_hello (); echo '<br>';

#Arrow Function With Parameter In Variable

$say_hola = fn($someone) => "Hola $someone";

echo $say_hola("Hassan"); echo '<br>';

#Arrow Inherit Variable From Parent Scope Is Automatic

$msg = "Hi";

$say_hi = fn($someone) => "$msg $someone";

echo $say_hi("Hassan"); echo "<br>";

#Pass Arrow Function To Function => array_map

$nums = [10, 20,30 ,40,50];

$nums_after_adding_10 = array_map(fn($item)=>$item + 10 , $nums);

echo '<pre>';
print_r($nums_after_adding_10);
echo '</pre>'; echo '<hr>';

// ----------- Lesson 53(String Access And Update Elements) --------------
echo "<h3>Lesson 53</h3>";
/*
    String
        Access Elements 
            String Is Array Of Characters
            Access Elements By Index "Zero Based Indexing"
            Negative Index Are Allowed
        Update Elements 
            Update Current Elements
            Add New Elements

    Search
        Single_Byte and Multi-Byte
*/

$str = "Elmalik";

echo "First Letter Is $str[0] <br>";
echo "4th Letter Is $str[3] <br>";
echo "Number Of Letters " . strlen($str) . "<br>";
echo "Last Letter Is $str[-1] <br>";
echo "Last Letter Is {$str[strlen($str) -1]} <br>";

echo $str . "<br>";
$str[0] = "A";
echo $str . "<br>";
$str[9] = "A";
echo $str . "<br>"; echo "<hr>";

// -------- Lesson 54(String Functions - Part1 - 6 Functions) ------------
echo "<h3>Lesson 54</h3>";
/*
    String Functions
        lcfirst(String[Required])
        ucfirst(String[Required])
        strtolower(String[Required])
        strtoupper(String[Required])
        ucwords(String[Required], Delimiters[Optional])
        str_repeat(String[Required], Count[Required])
*/

echo lcfirst("Hassan Web School") . "<br>";
echo ucfirst("hassan web school") . "<br>";
echo strtolower("HASSAN WEB SCHOOL") . "<br>";
echo STRTOUPPER("hassan web school") . "<br>";
echo ucwords("hassan web school") . "<br>";
echo ucwords("hassan web |school" , "|") . "<br>";
echo ucwords("elmalik  web  @ school", "@") . "<br>";
echo ucwords("elmalik  web  @school", "@") . "<br>";
echo str_repeat("Hassan ",3); echo "<hr>";

// -------- Lesson 55(String  Functions - part2 - 7 Functions) ----------
echo "<h3>Lesson 55</h3>";
/*
    String Functions
        implode(Separator[Optional], Array[Required]) => join() Is Alias
        explode(Separator[Required], String[Required], Limit[Optional])
        str_shuffle(String[Required])
        strrev(String[Required])
        trim(String[Required], CharsList[Optional])
        ltrim(String[Required], CharsList[Optional])
        rtrim(String[Required], CharsList[Optional])
        Space ""
        Tab \t
        New LIne \n
        Carriage Return \r
        Vertical Tab "\x0B"
        Null "\0"
*/

$friends =["Hassan","Nabil","Mahmoud","Elmalik"];
echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode("@@", $friends) . "<br>";
echo implode($friends) . "<br>";
echo join("!",$friends);

$str = "Hassan Web  School Is Cool";
echo "<pre>";
print_r(explode(" ", $str));
print_r(explode(" I", $str));
print_r(explode(" ", $str,0));
print_r(explode(" ", $str,1));
print_r(explode(" ", $str,4));
print_r(explode(" ", $str,-2));
print_r(explode("ss", $str));
echo "</pre>";

echo str_shuffle("Elmalik") . "<br>";
echo strrev("Elmalik") . "<br>";

echo strlen("   Hassan   ") . "<br>";
echo strlen (trim("   Hassan   ")) . "<br>";
echo trim("#@@Elmalik@@@###", "@") . "<br>";
echo rtrim("#@@Elmalik@@@###", "#@") . "<br>";
echo ltrim("#@@Elmalik@@@###", "#@") . "<br>"; echo "<hr>";

// -------- Lesson 56(String Functions - Part3 - 5 Functions) ---------
echo "<h3>Lesson 56</h3>";
/*
    String Functions
        chunk_split(String[Required], Length[Optional,End[Optional])
        strlen(String[Required])
        str_split(String[Required], Length[Optional])
        strip_tags(String[Required], Allowed[Optional])
        nl2br(String[Required], XHTML[Optional])
*/

echo chunk_split("Hassan Web School",3,"@"); echo '<br>';
echo chunk_split("Hassan Web School", 100, "@") . "<br>";
echo chunk_split("hassan web school", 4, "<br>");

echo '<pre>';
print_r (str_split("Elmalik"));
echo '</pre>';
echo '<pre>';
print_r (str_split("Elmalik",2));
echo '</pre>';

echo "<h3>Hello <i>Elmalik</i></h3>"; echo '<br>';
echo strip_tags("<h3>Hello <i>Elmalik</i></h3>"); echo '<br>';
echo strip_tags("hassan<br>nabil</br>elmalik") . "<br>";
echo strip_tags("<h3>Hello <i>Elmalik</i></h3>","<h3>"); echo '<br>';

echo nl2br("Elmalik\nWeb\nSchool\n");
echo nl2br("Elmalik\nWeb\nSchool",false); echo '<hr>';

// --------- Lesson 57(String Functions - Part4 - 5 Functions) ---------
echo "<h3>Lesson 57</h3>";
/*
    String Functions
        strpos(String[Required], Value[Required], Start Position[Optional]) Case_Sensitive
        strrpos(String[Required], Value[Required], Start Position[Optional]) Case_Sensitive
        stripos(String[Required], Value[Required], Start Position[Optional]) Case_Sensitive
        strripos(String[Required], Value[Required], Start Position[Optional]) Case_Sensitive
        substr_count(String[Required], Value[Required], Start Position[Required], Length[Optional])

    Search
        OverLapString
*/

var_dump(strpos("Hello Hello", "H")); // 0
echo (strpos("Hello Hello", "H")); // 0
var_dump(strpos("Hllo Hello", "He")); // 5
var_dump(strpos("Hello Hello", "H", 3)); // 6
var_dump(strpos("Hello Hello", "H", 6)); // 6
var_dump(strpos("Hello Hello", "h")); // False
var_dump(strpos("Hello Hello", "H", -2)); // False
var_dump(strpos("Hello Hello", "H", -5)); // 6
var_dump(strpos("Hello Hello", "H", -11)); // 0
var_dump(strrpos("Hello Hello", "H")); // 6
var_dump(strrpos("Hello Hello", "H", 5)); // 6
var_dump(stripos("Hello Hello", "h")); // 0
var_dump(strripos("Hello Hello", "h")); // 6
var_dump(substr_count("Hello Hello", "He")); // 2
var_dump(substr_count("Hello Hello", "He", 1)); // 1
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
var_dump(substr_count("abcdabcda", "abcda"));  echo "<hr>"; // 1 

  // ------- Lesson 58(String Functions - Part 5 - 4 Functions) --------
  echo "<h3>Lesson 58</h3>";
  /*
    String Functions
        parse_str(String[Required], Array[Required])
        quotemeta(String[Required])
        str_pad(String[Required], Length[Required], String[Optional], Pad FLag[Optional])
        STR_PAD_BOTH
        STR_PAD_LEFT
        STR_PAD_RIGHT
        strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
 */

 parse_str("name=Hassan&email=real@gg.com&os=mac",$query);

 echo '<pre>';
 print_r($query);
 echo '</pre>';
 echo $query["name"] . "<br>";
 echo $query["email"] . "<br>";
 echo $query["os"] . "<br>";

 echo "Hello [] () * + . <br>";
 echo quotemeta("Hello [] () * + . <br>");

 echo str_pad("12",8,0, STR_PAD_BOTH) . "<br>";
 echo str_pad("321",8,0, STR_PAD_BOTH) . "<br>";
 echo str_pad("1313",8,0, STR_PAD_LEFT) . "<br>";
 echo str_pad("15435",8,0, STR_PAD_LEFT) . "<br>";
 echo str_pad("500432",8,0, STR_PAD_LEFT) . "<br>";

 echo strtr("Elmalik Web School", "l","@"); echo "<br>";
 $translation = ["l" => "@" , "o" => "#"];
 echo strtr("Elmalik Web School", $translation); echo "<hr>";
//  echo strtr("Elmalik Web School", ["l", "o"],["A", "B"]); echo "<br>";

// -- Lesson 59(String Functions - part 6 - Str_Replace, str_Irreplace) --
 echo "<h3><u>Lesson 59</u></h3>";
 /*
    String Functions
        str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
        Its Case-Sensitive
        str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
*/
// str_replace("<h3>", "<h3><u>" , __FILE__);

echo str_replace("o","@", "Elmalik Web School", $r); echo "<br>";
echo "replace count is $r";echo "<br>";
echo str_replace("oo","@", "Elmalik Web School", $r); echo "<br>";
echo "replace count is $r";echo "<br>";
echo str_replace(["l","o"],"A", "Elmalik Web School", $r); echo "<br>";
echo "<mark>" . str_replace(["l","o","e"],["#","@"], "Elmalik Web School", $r) . "</mark>". "<br>";

echo '<pre>';
print_r (str_replace("One","1", ["One", "Two", "Three", "One", "one"]));
print_r (str_replace(["One", "Two"],["1", "2"], ["One", "Two", "Three", "One", "one"]));
print_r (str_replace(["One", "Two", "Three"],["1", "2"], ["One", "Two", "Three", "One", "one"]));
print_r (str_replace(["one", "two"],["1", "2"], ["One", "Two", "Three", "One", "one"]));
print_r (str_ireplace(["one", "two"],["1", "2"], ["One", "Two", "Three", "One", "one"]));
echo '</pre>'; echo "<hr>";

// ------- Lesson 60(String Functions - Part 7 - Substr_Replace) ---------
echo "<h3><u>Lesson 60</u></h3>";
/*
    String Functions
        substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
          $Positive Number => Length Of String To Be Replaced
          $Negative Number => Characters Left At The End After Replacement
          $0               => Insert Instead Od Replace
*/

echo substr_replace("OneTwo",1,0); // 1
echo '<br>';
echo substr_replace("OneTwo",1,3); // One1
echo '<br>';
echo substr_replace("OneTwo",1,5); // OneTw1
echo '<br>';
echo substr_replace("OneTwo",1,-1); // OneTw1
echo '<br>';
echo substr_replace("OneTwo",2,2); // On2
echo '<br>';
echo substr_replace("OneTwo",2,2,2); // On2wo
echo '<br>';
echo substr_replace("OneTwo",2,1,4); // O2o
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,3); // Elmalik_A_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,-1); // Elmalik_Al
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,-3); // Elmalik_Aool
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,-9); // Elmalik_Aeb_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,-10); // Elmalik_AWeb_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-1,1); // Elmalik_Web_SchooA
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-1,2); // Elmalik_Web_SchooA
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-1,-2); // Elmalik_Web_SchooAl
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-1,-5); // Elmalik_Web_SchooAl
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-10,-5); // Elmalik_Achool
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-10,-10); // Elmalik_AWeb_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-20,-10); // AWeb_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",-20,-30); // AElmalik_Web_School
echo '<br>';
echo substr_replace("Elmalik_Web_School","@",1,0); // E@lmalik_Web_School
echo "<pre>";
print_r (substr_replace(["OneTwo", "ThreeFour"],1,0)); // 1,1
print_r (substr_replace(["OneTwo", "ThreeFour"],1,2)); // On1, Th1
print_r (substr_replace(["OneTwo", "ThreeFour"], 1, 2, 2)); // On1wo, Th1eFour
print_r (substr_replace(["OneTwo", "ThreeFour"], 1, 2, 0)); // On1eTwo, Th1reeFour
echo "</pre>"; echo "<hr>";

// --------- Lesson 61(String Functions - Part 8 - 4 Functions) ---------
echo "<h3><u>Lesson 61</u></h3>";
/*
    String Functions
        wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
        ord(String[Required])
        chr(Int[Required])
        similar_text(String_One[Required], String_Two[Required], Percent[Optional])
         Returns The Number Of Matching Characters
*/

$str = "Welcome To To To T Elmalik Web School Website Very_Very_Very_Long";

echo strlen($str);
echo '<br>';
echo wordwrap($str);
echo '<br>';
echo wordwrap($str, 8, "<br>");echo '<br> -----------------------';
echo '<br>';
echo wordwrap($str, 8, "<br>" , true);echo '<br> -----------------------';
echo '<br>';

echo ord("a"); // 97
echo '<br>';

$s = "A";
if ((ord($s) >= 97 & ord($s) <= 122)){
    echo "The Char Is Small And It's Ascii Code Is " .ord($s);
}elseif((ord($s) >= 65 & ord($s) <= 90)){
    echo "The Char Is Capital And It's Ascii Code Is " .ord($s);
}

echo '<br>';
echo chr(97); // a
echo '<br>';

echo similar_text("Elm@alik", "Elm_alikk");
echo '<br>';
echo similar_text("Elm@alik", "E ml_aikk");
echo '<br>';
echo similar_text("Elmalik", "Elmalikk", $perc);
echo '<br>';
echo $perc; echo "<hr>";

// --------- Lesson 62(String Functions - Part 9 - 3 Functions) ----------
echo "<h3><u>Lesson 62</u></h3>";
/*
    String Functions
        strstr(String[Required], Search[Required], Befor_Search[Optional] = False)
          => Alias [strchr]
          Case Sensitive
        stristr(String[Required], Search[Required], Befor_Search[Optional] = False)
          Case_Insensitive
        number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
*/

echo strstr("Elmalik Web School","l");echo "<br>"; // lmalik Web School
echo strstr("Elmalik Web School","W");echo "<br>"; // Web School
echo strstr("Elmalik Web School","W",True);echo "<br>"; // Elmalik 
echo strlen(strstr("Elmalik Web School","W",True));echo "<br>"; // 8

echo strstr("Elmalik Web School","w");echo "<br>"; // false
var_dump(strstr("Elmalik Web School","w")); // boolean false
echo strstr("Elzero Web", "e") . "<br>"; // ero Web


echo stristr("Elmalik Web School","w");echo "<br>"; // Web School
var_dump(stristr("Elmalik Web School","w"));echo "<br>"; // string Web School

echo 10_000_000;echo "<br>";

echo number_format(10000000.156032);echo "<br>";
echo number_format(10000000.156032,2);echo "<br>";
echo number_format(10000000.156032,2,"@");echo "<br>";
echo number_format(10000000.156032,2,"@","#");echo "<br>";echo "<hr>";

// ---------- Lesson 63(Array Functions - Part 1 - 4 Functions) -----------
echo "<h3><u>Lesson 63</u></h3>";
/*
    Array Functions

        array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
          Split An Array Into Chunks [Return A Multidimensional Indexed Array]
          Preserve_Key
            [False => Default] Reindex The Keys
            [True] Preserve The Keys

        array_change_key_case(Array[Required], Case[Optional])
          Changes The Case Of All Keys In An Array
          Case
            [CASE_LOWER => Default] Changes The Keys To Lowercase
            [CASE_UPPER] Changes The Keys To Uppercase

        array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

        array_count_values(Array[Required])
          Counts All The Values Of An Array
*/

$friends = ["Hassan", "Ahmed", "Sameh", "Mahmoud", "Gamal"];
echo '<pre>';
print_r (array_chunk($friends,2));

$countries = ["eg" => "Egypt", "ksa" => "Saudi Arabia", "SY" => "Syria", "USA" => "United States"];
print_r (array_chunk($countries,2));
print_r (array_chunk($countries,2,true));

print_r (array_change_key_case($countries));
print_r (array_change_key_case($countries,CASE_UPPER));

$keys = ["A", "O", "K"];
$values = ["Ahmed", "Osama", "Kamal"];
print_r (array_combine($keys,$values));// the two arrays must have the same numbers of elements

$counting = ["b","B","C","","A", "A", "B", "B", "B", "C"];
print_r(array_count_values($counting));
echo '</pre>';
echo '<hr>';


// -------- Lesson 64(Array Functions - Part 2 - 5 Functions) -----------
echo "<h3><u>Lesson 64</u></h3>";
/*
    Array Functions

        array_reverse(Array[Required], Preserve[Optional])
            Reverse Array Elements

        array_flip(Array[Required])
            Exchange Keys With Its Values

        count(Array[Required], Mode[Optional])
            Count Array Elements
            Mode
                0 => Default => Does Not Count Elements Of Multidimensional Arrays
                1 => Count Elements Of Multidimensional Arrays

            in_array(Search[Required], Array[Required], Type[Optional])
                Checks If A Value Exists In An Array

            array_key_exists(Key[Required], Array[Required])
                Check If Key Is Exists
*/

$family = ["Hassan", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

echo '<pre>';
print_r($family);
print_r(array_reverse($family));
print_r(array_reverse($family, true /*or 1*/ ));

$countries = ["EG" => "Egypt" , "KSA" => "Saudi Arabia" , "Sy" => "Syria" , "USA" => "United States"];
print_r(array_flip($countries));
echo '</pre>';

$counting = ["A", "B", "C", [1, 2, 3]];
echo count($counting);echo '<br>';
echo count($counting, 1 /* or true*/ );echo '<br>';

$search = ["1", 2, 3, 4];
var_dump( in_array("1", $search, 1));
if(in_array(1, $search)){
    echo 'The Element Is Found';
}echo '<br>';
if(in_array(1, $search , true)){
    echo 'The Element Is Found';
}else{
    echo 'The Element Is Not Found';
}echo '<br>';

$courses = ["Javascript" => 95, "PHP" => 100, "HTML" => 60, "CSS" => 65];
echo array_key_exists("PHP", $courses);
echo '<br>';
if(array_key_exists("PHP", $courses)){
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
}echo '<hr>';

// ---------- Lesson 65(Array Functions - Part 3 - 5 Functions) ----------
echo "<h3><u>Lesson 65</u></h3>";
/*
    Array Functions

        array_keys(Array[Required], Value[Optional], Type[Optional])
            Return The Array Keys
            Type
                False => Default => No Checking For Type
                True => Check For Type

        array_values(Array[Required])
            Return All The Values Of An Array

        array_pad(Array[Required], Size[Required], Value[Required])
            Pad Array To The Specified Length With A Value
            Negative Value Add Elements Befor Original Items
            If Size < Array Length Nothing Will Be Deleted

        array_product(Array[Required])
            Calculate The Product Of Values In An Array => Return Int || Float
            In Mathematics, A Product Is The Result Of Multiplication

        array_sum(Array[Required])
            Calculate The Sum Of Values In An Array
*/

$friends = ["Hassan", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Hassan", "Eman", 1, "1"];
$friends2 = ["H"=>"Hassan", "A"=>"Ahmed", ""=>"Sameh", "M"=>"Mahmoud", "G"=>"Gamal", "Hassan", "Eman", 1, "1"];
echo '<pre>';
print_r(array_keys($friends));
print_r(array_keys($friends, "Hassan"));
print_r(array_keys($friends, "1"));
print_r(array_keys($friends, "1", true));
print_r(array_keys($friends2));
print_r(array_keys($friends2,"Hassan"));

$countries = ["EG" => "Egypt" , "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
print_r(array_values($countries));
print_r(array_keys($countries));
print_r(array_keys($countries, "Egypt"));

$pad = ["A", "B", "C", "D"];
print_r(array_pad($pad, 10, "#"));
print_r(array_pad($pad, -10, "#"));
print_r(array_pad($pad, 2, "#"));
echo '</pre>';

$product = [10,5,2,10];
echo array_product($product) . "<br>";

$sum = [10,5,2,10];
echo array_sum($sum);echo "<hr>";

// ------------ Lesson 66(Current, Next, Prev, Reset, End) ---------------
echo "<h3><u>Lesson 66</u></h3>";
/*
    Array Functions

        Every Array Has An Internal Pointer To Its "Current" Element
        Which Is Initialized To The First Element.
        Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer
    
    current(Array[Required]) => Return The Current Element In An Array
    next(Array[Required]) => Advance The Internal Pointer
    prev(Array[Required]) => Rewind The Internal Pointer
    reset(Array[Required]) => Put The Internal Pointer On First Element
    end(Array[Required]) => Put The Internal Pointer On Last Element
*/

$friends = ["Hassan", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman",];

echo current($friends) . "<br>"; // "Hassan"
echo next($friends) . "<br>"; // "Ahmed"
echo current($friends) . "<br>"; // "Ahmed"
echo next($friends) . "<br>"; // "Sameh"
echo current($friends) . "<br>"; // "Sameh"
echo prev($friends) . "<br>"; // "Ahmed"
echo reset($friends) . "<br>"; // "Hassan"
echo current($friends) . "<br>"; // "Hassan"
echo end($friends) . "<br>"; // "Eman"
echo current($friends) . "<br>"; // "Eman"
echo '<hr>';

// ------ Lesson 67(Array Merge , Array Replace, Array Rand, Shuffle) ------
echo "<h3><u>Lesson 67</u></h3>";
/*
    Array Functions

        array_merge(Array[Required], Other_Array/s[Optional])
            Merge One Or More Arrays
                Later Array Key With The Same Name Override The Value Of The Previous One
                Numeric Key Will Be Renumbered

            array_replace(Array[Required], Replacement/s[Optional])
                Replaces Elements From Passed Arrays Into The First Array
                    Same Key => Value In Second Array Replace Same Key => Value In The First Array
                    If Key In Second Array Not Found In First Array It Will Be Created

            array_rand(Array[Required], Num[Optional])
                Pick One Or More Random Keys Out Of An Array

            Shuffle(Array[Required])
                Shuffle An Array
*/

$merge_one = ["One" => "PHP" , "Two" => "CSS", "Three" => "Javascript"];
$merge_two = ["One" => "HTML", "Four" => "Python", "Five" => "Python"];
echo '<pre>';
print_r(array_merge($merge_one, $merge_two));
// print_r($merge_one);
$merge_three = [10 => "PHP" , 20 => "CSS", 30 => "Javascript"];
$merge_four = [ 0 => "Python" , 10 => "Go" , "10" => "C#"];
print_r(array_merge($merge_three, $merge_four));

$main = ["One" => "PHP" , "Two" => "CSS", "Three" => "Javascript"];
$replace = ["One" => "HTML", "Four" => "Python"];
print_r(array_replace($main,$replace));
// print_r($main);
print_r(array_replace($merge_three,$merge_four));

$main = ["One" , "Two", "Three"];
$replace = ["Five", "Four"];
print_r(array_replace($main,$replace));

$nums = ["A", "B", "C", "D", "E"];
echo array_rand($nums);echo '<br>';
echo $nums[array_rand($nums)] . "<br>";

print_r(array_rand($nums,3));
foreach(array_rand($nums,3) as $num){
    echo($nums[$num]) . '<br>';
}

shuffle($nums);
print_r($nums);
echo '</pre>';echo '<hr>';

// ----- Lesson 68(Array Shift, Array Pop, Array Push, Array Unshift) -----
echo "<h3><u>Lesson 68</u></h3>";
/*
    Array Functions

        array_shift(Array[Required])
            Shift An Element Off The Beginning Of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        array_pop(Array[Required])
            Pop The Element Off The End Of Array
            This Function Will Reset => "reset()" The Input Array Pointer

        array_push(Array[Required], Values[Optional])
            Push One Or More Elements Onto The End Of Array
            You Can Use $arr[]

        array_unshift(Array[Required], Values[Optional])
            Add One Element In The Beginning Of An Array
            This Function Will Reset => "reset()" The Input Array Pointer
*/

$chars = ["A", "B", "C", "D"];

echo '<pre>';
print_r($chars);
$first = array_shift($chars);
echo "$first <br>";
print_r($chars);

$last = array_pop($chars);
echo "$last <br>";
print_r($chars);

array_push($chars, "X", "Y", "Z");
print_r($chars);
array_push($chars, "1");
print_r($chars);
$chars[] = "1";
$chars[] = "2";
print_r($chars);

array_unshift($chars, "One", "Two", "Three");
print_r($chars);
$chars[0] = "0";
print_r($chars);

$chars2 = ["A" => "Ahmed", "B" => "Bassem", "1" => "Hassan", "3" => "Nabil"];
array_push($chars2, "L", "M", "N");
print_r($chars2);
array_unshift($chars2, "S", "D", "F");
print_r($chars2);
echo '</pre>';echo '<hr>';

// -------------- Lesson 69(Array Slice, Array Splice) ------------------
echo "<h3><u>Lesson 69</u></h3>";
/*
    Array Functions

        array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
        Extract A Slice Of The Array
        Start
            0 From Start
            -1 From Last Element
        Length
            Negative => Stop Slicing Until This Index
            Not Set => All Elements From Start Position
        Preserve Keys
            False => Default => Reset Keys
            True => Preserve Keys
        If Array Have String Keys, It Will Always Preserve The Keys

    array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
        Remove A Portion Of The Array And Replace It With Something Else
        Start
            0 From Start
            -1 From Last Element
        Length
            Negative => Stop Removing Until This Index
            Not Set => Remove All Elements From Start Position
*/

$chars = ["A", "B", "C", "D", "E", "F", "G"];
$chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

echo '<pre>';
print_r(array_slice($chars, 2));
print_r(array_slice($chars, -4));
print_r(array_slice($chars, 2, 3));
print_r(array_slice($chars, 2, -1));
print_r(array_slice($chars_with_string_keys, 0, 2));
print_r(array_slice($chars_with_numeric_keys, 0, 2));
print_r(array_slice($chars_with_numeric_keys, 0, 2, true));
print_r($chars);

$nums = [10, 20, 30, 40, 50, 60, 70];
print_r(array_splice($nums, 2));
print_r($nums);

$nums = [10, 20, 30, 40, 50, 60, 70];
print_r(array_splice($nums, 2, 2));
print_r($nums);
print_r(array_splice($nums, 2, -2));
print_r($nums);
print_r(array_splice($nums, 2, 1,["One", "Two"]));
print_r($nums);
print_r(array_splice($nums, -4, -1));
print_r($nums);
echo '</pre>';echo '<hr>';

// ------ Lesson 70(Array Functions - Part 8 - 7 Sorting Functions) ------
echo "<h3><u>Lesson 70</u></h3>";
/*
    Array Functions
    
        sort(Array[Required], Flag[Optional])
            Sort An Indexed Array In Ascending Order

        rsort(Array[Required], Flag[Optional])
            Sort An Indexing Array In Descending Order

        asort(Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Value

        arsort(Array[Required], Flag[Optional])
            Sort An Associative Array In Descending Order According To The Value

        ksort(Array[Required], Flag[Optional])
            Sort An Associative Array In Ascending Order According To The Key
            
        krsort(Array[Required], Flag[Optional])
            Sort An Associative Array In Descending Order According To The Key
            
        natsort(Array[Required], Flag[Optional])
            Sorts An Array By Using A "Natural Order" Algorithm

    Practice 
        Flags
        Our Own Sorting Function
*/

$names = ["Hassan", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal" ,1 , 4, null];
sort($names);
echo '<pre>';
print_r($names);
rsort($names);
print_r($names);

$countries = ["S" => "Syria", "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];
asort($countries);
print_r($countries);
arsort($countries);
print_r($countries);

$codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];
ksort($codes);
print_r($codes);
krsort($codes);
print_r($codes);

$files = ["Photo20.png", "Photo1.png", "Photo3.png"];
sort($files);
print_r($files);
$files = ["Photo20.png", "Photo1.png", "Photo3.png"];
natsort($files);
print_r($files);
echo '</pre>';echo '<hr>';

// ---------------- Lesson 71(Array Filter, Array Map) ------------------
echo "<h3><u>Lesson 71</u></h3>";
/*
    Array Functions

        array_map(Callback Function[Required], Array[Required], Other Arrays[Otional])
            Applies The Callback To The Elements Of The Give Arrays

        array_filter(Array[Required], Callback Function[Required], Flag[Optional])
            Filter Values Of An Array Using A Callback Function
            Flag
                ARRAY_FILTER_USE_KEY
                ARRAY_FILTER_USE_BOTH
                0 Default => Send Value As Arguments
*/

function add_title($fname, $lname){
    return "Hello Mr $fname $lname";
}
$first_names = ["Hassan", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
$last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim" ,"Ali"];
echo '<pre>';
print_r(array_map("add_title", $first_names, $last_names));
print_r(array_map(fn($f, $l) => "Hello Mr $f $l" , $first_names, $last_names));

$nums = [1 => 3, 6 => 1, 3 => 2, 4 => 8, 5 => 4];
print_r(array_filter($nums, fn($n) => $n>4));
print_r(array_filter($nums, fn($n) => $n>4, ARRAY_FILTER_USE_KEY));
print_r(array_filter($nums, fn($value,$key) => $value>2 || $key>4, ARRAY_FILTER_USE_BOTH));
print_r(array_filter($nums, fn($n1,$n2) => $n1>=3 & $n2>=1, ARRAY_FILTER_USE_BOTH));
echo '</pre>'; echo '<hr>';

// --------------------- Lesson 72(Array Reduce) ------------------------
echo "<h3><u>Lesson 72</u></h3>";
/*
    Array Functions
        
        array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
            Reduce The Array To A Single Value
            Carry => The Value Of The Previous Iteration || Initial Value
            Item => The Value Of The Current Iteration 
*/

function add($carry, $item){
    echo "$carry<br>";
    echo $item . "<br>";
    echo $carry + $item . "<br>";
    echo "##############<br>";
    return $carry + $item;
}
$nums = [10, 20, 50, 100, 10];
echo array_reduce($nums, "add");echo " "."Total".'<br>' . '---------' . "<br>";
echo array_reduce($nums, "add", 100);
echo '<br>';
echo array_sum($nums);
echo '<br>';

$array = [30, 40, 50, 60, 70, 80, 90, 100 , 10, 20];
echo array_reduce($array, fn() => min($array));
echo '<hr>';

// ---- Lesson 73(Math Functions - Part 1 - Abs, Mt_Rand, Intdiv, Fmod) ----
echo "<h3><u>Lesson 73</u></h3>";
/*
    Math Functions
        abs(Number[Required])
            Absolute Value => Non Negative Value

        mt_rand(min[Optional], max[Optional] || rand(min[Optional], max[Optional]))
            mt_getrandmax() => Show Largest Possible Random Value
            Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

        intdiv(dividend[Required], divisor[Required])
            Integer Division
            intdiv() vs /

        fmod(dividend[Required], divisor[Required])
            Floating Point Remainder (Modulo)
            fmod() vs %
*/

echo abs(10) . "<br>" . abs(0) . "<br>" . abs(-20) . "<br>";

echo rand() . "<br>" . mt_getrandmax() . "<br>" . rand(50, 60) . "<br>" ;
echo PHP_INT_MAX . '<br>';

echo 10/5 . "<br>" . gettype(10/5) . "<br>";
echo 11/5 . "<br>" . gettype(11/5) . "<br>";
echo intdiv(11, 5) . "<br>" . gettype(intdiv(11, 5)) . "<br>";
echo (int)(11/5) . "<br>";
echo 11/4 . "<br>" . gettype(11/4) . "<br>";
echo intdiv(11, 4) . "<br>" . gettype(intdiv(11, 4)) . "<br>";

echo 11%5 . "<br>" . gettype(11%5) . "<br>" ;
echo fmod(11, 5) . "<br>" . gettype(fmod(11, 5)) . "<br>";
echo 11.5%5 . "<br>" . gettype(11.5%5) . "<br>" ;
echo fmod(11.5, 5) . "<br>" . gettype(fmod(11.5, 5)) . "<br>";echo "<hr>";

// ---------- Lesson 74(Math Functions - Part 2 - Ceil, Floor) ------------
echo "<h3><u>Lesson 74</u></h3>";
/*
    Math Functions

        ceil(Number[Required])
            Round Up To Integer

        floor(Number[Required])
            Round Down To Integer
*/

echo ceil(5.99) . '<br>';
echo ceil(5.49) . '<br>';
echo ceil(5.10) . '<br>';
echo ceil(5.01) . '<br>';
echo ceil(-5.99) . '<br>';
echo ceil(-5.01) . '<br>';
echo gettype(ceil(-5.01)) . '<br>';

echo floor(5.99) . '<br>';
echo floor(5.49) . '<br>';
echo floor(5.10) . '<br>';
echo floor(5.01) . '<br>';
echo floor(-5.99) . '<br>';
echo floor(-5.01) . '<br>';
echo gettype(floor(-5.01)) . '<br>'  . '<hr>';

// ------------ Lesson 75(Math Functions - Part 3 - Round) --------------
echo "<h3><u>Lesson 75</u></h3>";
/*
Math Functions

round(Number[Required], Precision[Optional], Mode[Optional])
Round Up To Integer
Mode
PHP_ROUND_HALF_UP
PHP_ROUND_HALF_DOWN
PHP_ROUND_HALF_EVEN
PHP_ROUND_HALF_ODD

        ceil, floor, round => Return Double
*/

echo round(5.99) . "<br>";
echo round(5.50) . "<br>";
echo round(5.49) . "<br>";
echo round(5.10) . "<br>";
echo round(-5.01) . "<br>";
echo round(-5.99) . "<br>";
echo gettype(round(-5.01)) . '<br>';

echo round(5.99, 1) . "<br>";
echo round(5.94, 1) . "<br>";
echo round(5.995, 2) . "<br>";
echo round(5.994, 1) . "<br>";
echo round(5.994, 2) . "<br>";
echo round(5.994, 4) . "<br>";
echo '########### <br>';

echo round(5.99, 0,PHP_ROUND_HALF_UP ) . "<br>";
echo round(5.49, 0,PHP_ROUND_HALF_UP ) . "<br>";
echo round(5.15, 1,PHP_ROUND_HALF_UP ) . "<br>";

echo round(5.50, 0,PHP_ROUND_HALF_DOWN ) . "<br>";
echo round(5.51, 0,PHP_ROUND_HALF_DOWN ) . "<br>";
echo round(5.15, 1,PHP_ROUND_HALF_DOWN ) . "<br>";

echo round(5.50, 0,PHP_ROUND_HALF_EVEN) . "<br>";
echo round(4.50, 0,PHP_ROUND_HALF_EVEN) . "<br>";

echo round(5.50, 0,PHP_ROUND_HALF_ODD) . "<br>";
echo round(4.50, 0,PHP_ROUND_HALF_ODD) . "<br>" . "<hr>";

// -------- Lesson 76(Math Functions - Part 4 - Sqrt, Min, Max) ----------
echo "<h3><u>Lesson 76</u></h3>";
/*
    Math Functions

        sqrt(Number[Required])
            Square Root

        min(array[Required]) || min(Values[Required])
            Find Lowest Value

        max(array[Required] || min(Values[Required]))
            Find Highest Value
*/

echo sqrt(16) . "<br>";
echo sqrt(8) . "<br>";
echo sqrt(25) . "<br>";

echo min(10, 20, -40, -30, 50) . "<br>";
echo min([10, 20, -40, -30, 50]) . "<br>";

echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6]));
echo "</pre>";
echo "<pre>";
print_r(min([1, 3, 5], [10]));
echo "</pre>";

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6]));
echo "</pre>";
echo "<pre>";
print_r(max([1, 3, 5], [10]));
echo "</pre>" . "<hr>";

//  Lesson 77(Filter Functions -Part 1- Filter_List, Filter_Id, Filter_Var)
echo "<h3><u>Lesson 77</u></h3>";
/*
    Filter Functions

        filter_list()
            Returns A List Of All Supported Filters

        filter_id(Filter_Name[Required])

        filter_var(Value[Required], Filter[Optional], Options[Optional])
            Filters A Variable With A Specified Filter
*/

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; //258

$val = true; // True || 1 || "yes" || "on"
// if (filter_var($val, 258)){
if (filter_var($val, FILTER_VALIDATE_BOOL)){
    echo "This Is True";
}else {
    echo "This Is False";
}echo "<hr>";

// ---------- Lesson 78(filter_var Validate Filters -Part 1-) ------------
echo "<h3><u>Lesson 78</u></h3>";
/*
    Filter Functions

        filter_var(Value[Required], Filter[Optional], Options[Optional])
            Validate Filters

                FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
                    Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

                FILTER_VALIDATE_URL
                    Flag => FILTER_NULL_ON_FAILURE
                    Flag => FILTER_FLAG_PATH_REQUIRED
                    Flag => FILTER_FLAG_QUERY_REQUIRED

                FILTER_VALIDATE_IP
                    Flag => FILTER_NULL_ON_FAILURE
                    Flag => FILTER_FLAG_IPV4
                    Flag => FILTER_FLAG_IPV6

                FILTER_VALIDATE_MAC
                    Flag => FILTER_NULL_ON_FAILURE
*/

$bool = "ElMalik";
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
echo '<br>';

$url = "h://A/?";
var_dump(filter_var($url, FILTER_VALIDATE_URL,
["flags" =>  FILTER_NULL_ON_FAILURE |FILTER_FLAG_PATH_REQUIRED |FILTER_FLAG_QUERY_REQUIRED]));
echo '<br>';

$ip = "133.133.3.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP,
["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6]));
echo '<br>';

$mac = "11:10:51:01:53:11";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));
echo '<hr>';

// --------- Lesson 79(Filter_Var, Validate Filters -Part 2-) ------------
echo "<h3><u>Lesson 79</u></h3>";
/*
    Filter Functions

        filter_var(Value[Required], Filter[Optional], Options[Optional])
            Validate Filters

                FILTER_VALIDATE_EMAIL
                    Flag => FILTER_NULL_ON_FAILURE

                FILTER_VALIDATE_INT
                    Flag => FILTER_NULL_ON_FAILURE
                    Options => min_range
                    Options => max_range
                    Convert To Int On Success

                FILTER_VALIDATE_FLOAT
                    Flag => FILTER_NULL_ON_FAILURE
                    Options => min_range
                    Options => max_range
                    Convert To Float On Success
*/

$email = "o@hh.sa";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

$int = "101";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
$int = "90.00";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
$int = 90.00;
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
$int = "90.5";
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
$int = 90.5;
var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));

$float = "90.50";
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
$float = "90";
var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50,"max_range" => 100]]
));
 echo "<hr>";

// ------------- Lesson 80( filter_var Sanitize Filters) ----------------
echo "<h3><u>Lesson 80</u></h3>";
/*
    Filter Functions

        filter_var(Value[Required], Filter[Optional], Options[Optional])
            Sanitize Filters

                FILTER_SANITIZE_EMAIL
                    Remove All But Letters + Digits + ~!@#$%^&*'+-=?_{|}.[]
                    Test § ◘ Ç ƒf ± ☻ 0 ┴ û ▒ ô ╢ ┘ c ¼ ╥ è ♥ ↨ ☺ ♦ ♣ ♠ • ○

                FILTER_SANITIZE_NUMBER_INT
                    Remove All But Digits, +, -

                FILTER_SANITIZE_NUMBER_FLOAT
                    Remove All But Digits, +, - And Optionally [.,eE]
                    Flags => FILTER_FLAG_ALLOW_THOUSAND
                    Flags => FILTER_FLAG_ALLOW_FRACTION

                FILTER_SANITIZE_URL
                    Remove All But Letters + Digits + ~!@#$%^&*()-_+.',{}\\<>;/?:
                    Test § ◘ Ç ƒ ± ☻ ┴ û ▒ ô ╢ ┘ c ¼ ╥ è ♥ ↨ ☺ ♦ ♣ ♠ • ○ Space
*/

$email = "h@mm.   ▐ ♣ ♠;  sa;";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
echo "<br>";

$int = 100;
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";
$int = "h@mm.    hfh▐ ♣ ♠  sa";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";
$int = "100+=h@mm.    hfh▐ ♣ ♠  sa-100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";

$float = "1,757,=h@mm    hfh▐ ♣ ♠64.7465";
var_dump(filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT));
echo "<br>";
var_dump(filter_var(
$float,
FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND |FILTER_FLAG_ALLOW_FRACTION ]
));
echo "<br>";

$url = "https://elm◘ Ç ƒ ± ☻ ┴ û ▒ ô ╢ ┘alik.org;";
var_dump(filter_var($url, FILTER_SANITIZE_URL)); echo "<hr>";

// -------- Lesson 81(Filter Functions - Part 4 - Filter_Input) ---------
echo "<h3><u>Lesson 81</u></h3>";
/*
    Filter Functions

        filter_input(Type[Required], Filter[Optional], Options[Optional])
            INPUT_GET
            INPUT_POST
            INPUT_COOKIE
            INPUT_SERVER
            INPUT_ENV

        FILTER_VALIDATE_INT
        FILTER_NULL_ON_FAILUER
        FILTER_SANITIZE_NUMBER_INT
*/
// echo $_GET["num"];
echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
?>
<form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" value="Send">
</form>
<?php
echo "<hr>";

// ------- Lesson 82(File System Function - Part 1 - 4 Functions) --------
echo "<h3><u>Lesson 82</u></h3>";
/*
    File System Functions

        disk_total_space()
            Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
        
        disk_free_space() || diskfreespace()
            Get Free Space In Bytes => Then We Can Get [KB, MB, GB]

        file_exists(Path)
            Checks If A File Or Directory Exists

        filesize(File_Name)
            Get Space In Byets
*/

echo round(disk_total_space("c:") /1024 /1024 /1024 ). "<br>";

echo round(disk_free_space("c:") /1024 /1024 /1024 ). "<br>";

var_dump(file_exists("hassan.text"));
echo '<br>';

echo filesize("hassan.text");echo '<hr>';

// ----------------- Lesson 83(Is_Dir, MkDir, RmDir) --------------------
echo "<h3><u>Lesson 83</u></h3>";
/*
    File System Functions

        is_dir(Name)
            Tells If The Filename Is A Directory

        mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
            Permissions Is Ignored On Windows
            Permissions Is Octal Number Start With 0
                Second Number Is => Owner Permission
                Third Number Is => User Group Permission
                Fourth Number Is => Others Permissions

        rmdir(Name[Required], Context[Optional])
*/

var_dump(is_dir("h2"));
echo '<br>';
var_dump(is_dir("hassan.text"));
echo '<br>';

if(file_exists("Test/Upload/Files") == false){
    mkdir("Test/Upload/Files", 0777, true);
};
echo '<br>';

rmdir("Test/Upload/Files");echo '<hr>';

// ------------- Lesson 84(Chmod, FilePerms, Clearstatcache) -------------
echo "<h3><u>Lesson 84</u></h3>";
/*
    File System Functions

        chmod(File[Required], Mode[Required])
            Change Mode

        fileperms(Name)
            Gets File Permissions

        clearstatcache()
            Clear Cache

    Search
        Change Owner chown()
        Change Group chgrp()
*/

// mkdir("Y", 0700);
echo fileperms("Y");
echo '<br>';
chmod("Y", 0644);
clearstatcache();
echo fileperms("Y");
echo '<br>';
echo fileperms("hassan.text"); echo '<hr>';

// ---------- Lesson 85(Basename, Dirname, Realpath, Pathinfo) ----------
echo "<h3><u>Lesson 85</u></h3>";
/*
    File System Functions 

        basename(Path[Required], Suffix[Otional])
            Returns Trailing Name Component Of Path
        
        dirname(Path[Required], Levels[Optional] = 1)
            Returns A Parent Directory's Path
            Levels => Number Of Parent Directories To Go Up
        
        realpath(Path[Required])
            Returns Absolute Path

        pathinfo(Path[Required], Flags[Optional]) => Return Array
            PATHINFO_DIRNAME
            PATHINFO_BASENAME
            PATHINFO_EXTENSION
            PATHINFO_FILENAME
*/

echo basename("index.php") . "<br>";
echo basename(__FILE__, ".php") . "<br>";

echo dirname(__FILE__, 1). "<br>";
echo dirname(__FILE__, 2). "<br>";
echo dirname(__FILE__, 3). "<br>";
echo dirname(__FILE__, 4). "<br>";
echo dirname(__FILE__, 5). "<br>";
echo __DIR__ . "<br>";

echo realpath(__FILE__). "<br>";

echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";
echo pathinfo(__FILE__)["extension"] . "<br>";
echo pathinfo(__FILE__)["dirname"] . "<br>";
echo pathinfo(__FILE__, PATHINFO_DIRNAME) . "<br>";echo "<hr>";

// --------- Lesson 86(Fopen - Part 1 - Fgets, Fread, Fclose) ------------
echo "<h3><u>Lesson 86</u></h3>";
/*
    File System Functions
        Fopen(FileName[Required], Mode[Required], IncludPath[Optional], Context[Optional])

            Mode
            [r] For Read => Pointer At The Beginning
            [r+] For Read & Write => Pointer At The Beginning
            [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Creat If Not Exists
            [w+] For Read And Write => Pointer At The Begining + Truncate To 0 Length => Create If Not Exists

        fgets(File [Required], Length[Optional])
            Get A Line From An Open File
            Length => Number Of Bytes To Read || End Of Line If No Length
        fread(File[Required], Length[Required])
            Get A Data From An Open File
            Length => Maximum Number Of Bytes To Read
        fclose(File[Required])
            Closes An Open File Pointer
*/

$handle = fopen("hassan.text", "r");

echo fgets($handle, 4) . '<br>';
rewind($handle);
echo fgets($handle, 1024) . '<br>';
rewind($handle);

echo fread($handle, 4) . '<br>';
rewind($handle);
echo fread($handle, 1024);

fclose($handle);echo '<hr>';

// ---------------- Lesson 87(Fopen - Part 2 - Fwrite) ------------------
echo "<h3><u>Lesson 87</u></h3>";
/*
    File System Functions
        Fopen(FileName[Required], Mode[Required], IncludPath[Optional], Context[Optional])

            Mode
            [r] For Read => Pointer At The Beginning
            [r+] For Read & Write => Pointer At The Beginning
            [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Creat If Not Exists
            [w+] For Read And Write => Pointer At The Begining + Truncate To 0 Length => Create If Not Exists

            [a] For Write => Pointer At The End + Creat If Not Exists
            [a+] For Read & Write => Pointer At The End + Creat If Not Exists
            [x] Creat + Open For Write => Pointer At The Beginning
            [x+] Creat + Open For Read & Write => Pointer At The Beginning

        fwrite(File[Required], String[Required], Length[Optional])
            Write To An Open File
            Length => Maximum Number Of Bytes To Write
*/

$handle = fopen("hassan.text", "r");

fwrite($handle, "\r\nThis Is A New Line 1", 5);
fwrite($handle, "\r\nThis Is A New Line 2");

echo fread($handle, 100);

fclose($handle);echo '<hr>';

// ------ Lesson 88(Fopen - Part 3 - File,Feof And Loop Practice ) ------
echo "<h3><u>Lesson 88</u></h3>";
/*
    File System Functions
        Fopen(FileName[Required], Mode[Required], IncludPath[Optional], Context[Optional])

            Mode
            [r] For Read => Pointer At The Beginning
            [r+] For Read & Write => Pointer At The Beginning
            [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Creat If Not Exists
            [w+] For Read And Write => Pointer At The Begining + Truncate To 0 Length => Create If Not Exists
            [a] For Write => Pointer At The End + Creat If Not Exists
            [a+] For Read & Write => Pointer At The End + Creat If Not Exists
            [x] Creat + Open For Write => Pointer At The Beginning
            [x+] Creat + Open For Read & Write => Pointer At The Beginning

            [c]
                For Write
                Creat If Not Exists
                No Problem If Its Exists
                No Truncation
                Pointer At The Beginning
            [c+] For Read & Write

        file(File[Required], Flag[Optional], Context[Optional])
            Read Entire File Into Array
        feof(File[Required])
            Tests For EOF On A File Pointer
*/

echo '<pre>';
print_r(file("hassan.text"));
echo '</pre>';

echo count(file("hassan.text")) . '<br> <br>';

$handle = fopen("hassan.text", "r");

$line = 1;
while(!feof($handle)){
    echo "Line $line => " . fgets($handle) . '<br>';
    $line++;
}
echo '<br>';
// rewind($handle);
$handle = fopen("hassan.text", "r");
for($i = 0; $i< count(file("hassan.text")); $i++){
    echo fgets($handle) . "<br>";
}

fclose($handle);echo '<hr>';

// ----------------- Lesson 89(Ftell, Fseek, Rewind) -------------------
echo "<h3><u>Lesson 89</u></h3>";
/*
     File System Functions
        Fopen(FileName[Required], Mode[Required], IncludPath[Optional], Context[Optional])

        rewind(File[Required])
            Return The Pointer To The Beginning Of The File

        ftell(File[Required])
            Return Current Position Of The Pointer

        fseek (File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
            Go To A Position
            offset In Bytes
            SEEK_SET => Equal To offset
            SEEK_CUR => Current + Offset
            SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("hassan.text", "r");
echo ftell($handle) . '<br>';

echo fgets($handle) . '<br>';
echo fgets($handle) . '<br>';
echo ftell($handle) . '<br>';

rewind($handle);
echo ftell($handle) . '<br>';

// echo fgets($handle) . '<br>';
// echo ftell($handle) . '<br>';

echo fgets($handle) . '<br>';
echo fgets($handle) . '<br>';
echo ftell($handle) . '<br>';

fseek($handle, 0); // Rewind
echo ftell($handle) . '<br>';
echo fgets($handle) . '<br>';
echo ftell($handle) . '<br>';

fseek($handle, 10); 
echo fgets($handle) . '<br>';

fseek($handle, 58); 
echo fgets($handle) . '<br>';

fseek($handle, 7 , SEEK_CUR); 
echo fgets($handle) . '<br>';

fseek($handle, -10 , SEEK_END); 
echo fgets($handle) . '<br>';
echo ftell($handle) . '<br>';

fclose($handle);

echo mb_strlen("Elmalik\r\nWeb\r\nschool\r\nI Love Elmalik Web School\r\nI Love El", "8bit");
echo '<hr>';

// -------------- Lesson 90(Glob, Rename, Copy, Unlink) ------------------
echo "<h3><u>Lesson 90</u></h3>";
/*
    File System Functions

        glob(Pattern[Required], Flags[Optional])
            Find Pathnames Matching A Pattern And Return Array
        
        rename(Old[Required], New[Required]) => Move
            Renames A File Or Directory

        copy(Old[Required], New[Required], Context[Optional])
            Copy A File

        unlink(File[Required], Context[Optional])
            Delete A File

    Same Concept
        opendir()
        readdir()
        closedir()
*/

echo '<pre>';
print_r(glob("Old/*.*"));
print_r(glob("New/*.*"));
echo '</pre>';

// Rename => Same Place
// rename("Old/test.txt", "Old/testing.txt");

// Rename => Other Place => "Cut" || "Move"
// rename("Old/testing.txt", "New/testing_2.txt");

// rename("Old/elmalik.pptx.rtf", "Old/elmalik.pptx");
// rename("Old/hassan.pptx.rtf", "Old/hassan.pptx");
// rename("Old/info.docx.rtf", "Old/info.docx");
// rename("Old/work.xlsx.rtf", "Old/work.xlsx");

// Move To Other Place
// rename("Old/elmalik.pptx", "New/elmalik.pptx");

// Copy Without Rename
// copy("Old/Info.docx", "New/info.docx");

// Copy With Rename
// copy("Old/work.txt", "New/working.txt");

// unlink("Old/work.rtf");
echo '<hr>';

// ---------- Lesson 91(File_Get_Contents, File_Put_Contents) -----------
echo "<h3><u>Lesson 91</u></h3>";
/*
    File System Functions

        file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength[Optional])
            Reads Entire File Into A String
    
        file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
            Write Data To File
            Mode
                FILE_APPEND => If File Exists Append To It

        Creat If Not Exists
        Open And Close
        Return Number Of Bytes

    Search
        Get Set Include Path
*/

echo get_include_path() . "<br>";
// echo file_get_contents("hassan1.text", true, null, 4, 5);

// file_put_contents("hassan1.text", "\r\nHello Elmalik Web School <3", FILE_APPEND);
// echo file_put_contents("hassan1.text", "\r\nThis Is New Line", FILE_APPEND);
echo '<hr>';

// ------- Lesson 92(Datetime Functions - Part 1 - Five Functions) --------
echo "<h3><u>Lesson 92</u></h3>";
/*
    Date And Time Functions

        date_default_timezone_get()

        date_default_timezone_set(timezone[Required])

        date_creat(Date/Time[Optional], Timezone[Optional])
            Time: Date/Time String || Current Time If NULL
            Timezone: Timezone String || Current Timezone

        timezone_open(Timezone)

        checkdate(M, D, Y) => All Required
            Validate A Gregorian Date

        Will Cover Later
            date()
            date_format()
*/

// Get Timezone
echo date_default_timezone_get() . '<br>';

// Print Date And Time
echo date("Y-m-d H:i:s") . '<br>';

// Change Timezone
date_default_timezone_set("Africa/Cairo");

// Print Date And Time
echo date("Y-m-d H:i:s") . '<br>';

// Get Timezone
echo date_default_timezone_get() . '<br>';

// Create Date Object
$d = date_create("", timezone_open("Indian/Antananarivo"));

// Echo Date With Format
echo date_format($d, "Y-m-d H:i:s");

// Check Date
var_dump(checkdate(10, 25, 1982));
var_dump(checkdate(2, 31, 1982));
var_dump(checkdate(2, 10, 3500));
var_dump(checkdate(2, -10, 3500));
echo '<hr>';

// ----- Lesson 93(Datetime Functions - Part 2 - Date Format Part 1) -----
echo "<h3><u>Lesson 93</u></h3>";
/*
    Date And Time Functions

        date_format()

    [Year]
        Y => Four Digits
        y => Two Digits

    [Month]
        m => 01-12
        M => Text Month => 3 Letters
        F => Full Text
        t => Number Of Days In This Month

    [Day]
        d => Day Of The Month 1-31
        j => Day Without Leading Zero
        D => Text Day => 3 Letters
        l => Full Text
        z => Day Of The Year 0-365
        S => Suffix For Day Of The Month (st, nd, rd, nth) 

    [Time]
        a => small am/pm
        A => Capital am/pm

    [Hour]
        g => 1-12
        G => 0-23
        h => 01-12
        H => 00-23
    
    [Minutes, Seconds, Micro]
        i => 00-59
        s => 00-59
        u => Microseconds
*/

date_default_timezone_set("Africa/Cairo");
$d = date_create();

echo date_format($d, "Y") . '<br>';
echo date_format($d, "y") . '<br>';

echo date_format($d, "Y-m") . '<br>';
echo date_format($d, "Y-M") . '<br>';
echo date_format($d, "Y-F") . '<br>';
echo date_format($d, "t") . '<br>';

echo date_format($d, "Y-m-d") . '<br>';
echo date_format($d, "Y-m-j") . '<br>';
echo date_format($d, "Y-m-D") . '<br>';
echo date_format($d, "Y-m-l") . '<br>';
echo date_format($d, "Y-m-l // z") . '<br>';
echo date_format($d, "Y-m-l // z // d/j/D/l") . '<br>';
echo date_format($d, "Y-m-l , dS") . '<br>';
$d = date_create("2022-10-1");
echo date_format($d, "Y-m-l , dS") . '<br>';
$d = date_create("2022-10-2");
echo date_format($d, "Y-m-l , dS") . '<br>';
echo '<hr>';

// ----- Lesson 94 (Datetime Functions - Part 3 - Date Format Part 2) ----
echo "<h3><u>Lesson 94</u></h3>";
/*
    Date And Time Functions

        date_format()

    [Year]
        Y => Four Digits
        y => Two Digits

    [Month]
        m => 01-12
        M => Text Month => 3 Letters
        F => Full Text
        t => Number Of Days In This Month

    [Day]
        d => Day Of The Month 1-31
        j => Day Without Leading Zero
        D => Text Day => 3 Letters
        l => Full Text
        z => Day Of The Year 0-365
        S => Suffix For Day Of The Month (st, nd, rd, nth) 

    [Time]
        a => small am/pm
        A => Capital am/pm

    [Hour]
        g => 1-12
        G => 0-23
        h => 01-12
        H => 00-23
    
    [Minutes, Seconds, Micro]
        i => 00-59
        s => 00-59
        u => Microseconds
*/

$d = date_create("2022-10-1 15:10:10");
echo date_format($d, "Y-m-d , ga") . '<br>';
echo date_format($d, "Y-m-d , hA") . '<br>';
echo date_format($d, "Y-m-d , G") . '<br>';
echo date_format($d, "Y-m-d , H") . '<br>';
echo '############## <br>';

$d = date_create("2022-10-1");
echo date_format($d, "Y-m-d , ga") . '<br>';
echo date_format($d, "Y-m-d , hA") . '<br>';
echo date_format($d, "Y-m-d , G") . '<br>';
echo date_format($d, "Y-m-d , H") . '<br>';
echo '############## <br>';

$d = date_create();
echo date_format($d, "Y-m-d , ga") . '<br>';
echo date_format($d, "Y-m-d , hA") . '<br>';
echo date_format($d, "Y-m-d , G") . '<br>';
echo date_format($d, "Y-m-d , H") . '<br>';
echo date_format($d, "Y-m-d , H/i/s") . '<br>';
echo date_format($d, "Y-m-d , H/i/s/u") . '<br>';
echo '<hr>';

// ------ Lesson 95(Datetime Functions - Part 4 - Add,Sub,Modify) --------
echo "<h3><u>Lesson 95</u></h3>";
/*
Date And Time Functions

date_interval_create_from_date_string()
date_add()
date_sub()
date_modify()
*/

date_default_timezone_set("Africa/Cairo");

$d = date_create();
date_add($d, date_interval_create_from_date_string("1 year 5 days 2 months"));
echo date_format($d, "Y/m/d g-i-sa") . '<br>';

$d = date_create();
date_sub($d, date_interval_create_from_date_string("5 days 1 year 2 months"));
echo date_format($d, "Y/m/d g-i-sa") . '<br>';

$d = date_create();
date_modify($d, "+1 year");
echo date_format($d, "Y/m/d g-i-sa") . '<br>';

$d = date_create();
date_modify($d, "+20 months");
echo date_format($d, "Y/m/d g-i-sa") . '<br>';
echo '<hr>';

// ------ Lesson 96(Datetime Functions - Part 5 - Three Functions) -------
echo "<h3><u>Lesson 96</u></h3>";
/*
Date And Time Functions

time()
Unix Timestamp => Seconds Since 01 Jan 1970

getdate()

date_parse()
*/

date_default_timezone_set("Africa/Cairo");

echo time() . " Second<br>";
echo time()/60 . " Minutes<br>";
echo time()/60/60 . " Hours<br>";
echo time()/60/60/24 . " Days<br>";
echo time()/60/60/24/365 . " Years<br>";
echo '################<br>';
echo time() . " Second<br>";
echo round(time()/60) . " Minutes<br>";
echo round(time()/60/60) . " Hours<br>";
echo round(time()/60/60/24) . " Days<br>";
echo round(time()/60/60/24/365) . " Years<br>";

echo "<pre>";
print_r(getdate());
echo "</pre>";

$t = getdate();
echo $t["year"] . "<br>";

echo "<pre>";
print_r(date_parse("1987-9-1 14:25:30"));
print_r(date_parse("1987-9-1 45:25:30"));
print_r(date_parse("1987-9-50 45:25:30 UTCC"));
echo "</pre>";
echo '<hr>';

// ----- Lesson 97(Datetime Functions - Part 6 - Date_Diff,Strtotime) ----
echo "<h3><u>Lesson 97</u></h3>";
/*
    Date And Time Functions

        date_diff()

        strtotime(DateTime, Base)
*/

date_default_timezone_set("Africa/Cairo");

$reg = date_create("2022-01-16");
$now = date_create("now");

$diff = date_diff($reg, $now);
echo '<pre>';
print_r($diff);
echo '</pre>';
echo 'You Are A Member For ' . $diff->days . " Days<br>";

echo date("Y-m-d H:i:s", strtotime("next thursday")) . "<br>";
echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
echo date("Y-m-d D H:i:s", strtotime("tomorrow", strtotime("1987-9-1"))) . "<br>";
echo date("Y-m-d D H:i:s", strtotime("now", strtotime("1987-9-1"))) . "<br>";