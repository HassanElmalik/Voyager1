<?php 

//1
$a = 100;
$b = 200;
$c = 100;

if($b > $a & $a === $c){
    echo "Yes";
}echo '<br>';


//2
// Test Case 1
$a = 100;
$b = 200;
$c = 300;
// A Is Not Larger Than B Or C
if ($a < $b and $a < $c){
    echo "A Is Not Larger Than B Or C";
}echo '<br>';

// Test Case 2
$a = 200;
$b = 100;
$c = 300;
// A Is Larger Than B
if ($a > $b){
    echo "A Is Larger Than B";
}echo '<br>';

// Test Case 3
$a = 200;
$b = 200;
$c = 100;
// A Is Larger Than c
if ($a > $c){
    echo "A Is Larger Than C";
}echo '<br>';


//3
?>
<br>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    echo "The Request Method Is Post And Username Is " . $_POST["user"];
    echo '<br>';
    echo $_POST["user"];
    echo '<br>';
if($_POST["user"] == ($admins[0] or $admins[1] or $admins[2])){
    echo "This Username " . $_POST["user"] . " Is Admin";
    echo '<br>';
    // foreach($admins as $admin){
    //     if($_POST["user"]=="$admin"){
    // echo "This Username {$admin} Is Admin";
    //     } 
}
}


//4
$a = 30;
$b = 20;
$c = 10;

echo ($a+$b === $c)? "A+B=C": (($a+$c === $b)? "A+C=B": (($b+$c===$a)? "B+C+A":("The End")));
echo '<br>';

//5
$name = "Osama";
$age = 40;
$country = "Egypt";

if($age >18 & gettype($name) === "string" & $country === "Egypt" ){
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}


//6
$genre = "Hack And Slash";

switch($genre){
case "RPG": echo "I Recommend Ys Games";
break;
case "Hack And Slash": echo "I Recommend Castlevania Games";
break;
case "FPS": echo "I Recommend Uncharted Games";
break;
case "platform": echo "I Recommend Megaman Games";
break;
case "Puzzle": echo "I Recommend Megaman Games";
break;
default : echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo '<br>';


//7
$num_one = 23;
$num_two = 5;
$op = "+";

switch($op){
case "+": echo $num_one + $num_two;
break;
case "-": echo $num_one - $num_two;
break;
case "/": echo $num_one / $num_two;
break;
case "*": echo $num_one * $num_two;
break;
default : "Unknown Operation";
}echo '<br>';
// if($op === "+"){
//     echo $num_one + $num_two ;
// }else if ($op === "-"){
//     echo $num_one - $num_two;
// }else if ($op === "/"){
//     echo $num_one / $num_two;
// }else if ($op === "*"){
//     echo $num_one * $num_two;
// }else {
//     echo "Unknown Operation";
// }



//8
$day = "as";

if($day == "Sat" or $day == "Sun" or $day == "Mon"){
echo "We Are Open All The Day";
}elseif ($day == "Tue" || $day == "Wed"){
echo "We Are Open From 08:12";
}elseif ($day == "Thu" || $day == "Fri"){
echo "We Are Closed";
}else {
    echo "Unknown Day";
}