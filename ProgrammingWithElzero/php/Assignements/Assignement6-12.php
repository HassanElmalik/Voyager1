<?php

//1
echo (int)15.2 + (int)14.7 + (10.5 + 10.5) ."<br>"; // 50
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))) . "<br>"; // Integer


//2


// Method One 
echo gettype(100) . "<br>";
// Method Two
var_dump(100);
// Method Three => Optional


//3
echo "Hello \"Elzero\" \\\ \"\"\" We Love \"\$\$PHP\" ";
echo '<br>';

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"


//4
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';
// Needed Output
/*We
Love
Elzero
Web
School*/


//5
echo nl2br(<<<'elzero'
Hello "'Elzero'"
We Love $Programing$
Language Specially "PHP"
elzero) ; 
echo '<br>';


//6
$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;
// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
//Hello \PHP\ We Love Programming
echo '<br>';


//7
echo (bool)("Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");
/* Needed Output
1
integer
*/
echo '<br>';


//8


$Array=["FrontEnd" => [
    "HTML",
    "CSS",
    "JS" => ["Vuejs" => [2 =>"v2",
                         3=>"v3"],
                "Reactjs",
                "Svelte"]], 
        "BackEnd" => [
    "PHP",
    "MySQL",
    "Security"], 
        "Git", 
        "Github",
        "Testing" => [ 
    "Unit Testing",
    "End To End",
    "Integration"]
    ];

echo '<pre>';
print_r($Array);
echo '</pre>';