<?php
// declare(strict_types=1);
// echo PHP_INT_MAX;
// var_dump (8/2);
$a = 15;
echo (int)("lessons 5");
echo '<br>';
echo "hassan $a";echo '<br>';
echo '<br>';

echo 'hassan $a
hello
ok';
echo '<br>';
echo "{$a}\n";

echo 'c:\\*';
echo '<br>';
echo 'c:\*.';
echo '<br>';
echo "c:\\*";
echo '<br>';
echo "c:\*
\n hassan";

ECHO '<br>';
ECHO ((0.1+0.7)*10);
echo '<br>';
echo gettype(0.0);
echo '<br>';
var_dump ((bool)[0]);
echo '<br>';
$str = "Hassan";
$str[10]="i";
echo $str;
echo '<br>';
$arr1=[false];
print_r($arr1);
echo '<br>';
$arr2=['hassan','nabil','elmalik'];
[$a,$b,$c]=$arr2;
echo $a . " " . $b . " " . $c;
echo '<br>';
$aa = 'Hassan';
$bb = &$aa;
$bb = "My Name Is $bb";
echo $bb;
echo '<br>';
echo $aa;
echo '<br>';
var_dump($unset_var);
echo '<br>';

function test(){
static $count = 0;
$count ++;
echo $count;
    if($count<10){
test();
    }
 
}
test();
echo '<br>';
$clone = 5;
$break = 10;
echo $clone;
echo $break;
echo '<br>';
var_dump(100>60 xor 100>100 xor 100>60 xor 100>70 xor 100>120);
echo '<br>';
echo (20.5/10.5);
echo '<br>';
echo gettype(100>50);
echo '<br>';
$b = "2" and false;
echo $b;
echo '<br>';
$vals = ['sky', true, -4, [1, 2, 3, 4],null];

foreach ($vals as $val) {
    
    $t = gettype($val);

    $res = match($t) {

        'string' => 'value is a string',
        'integer' => 'value is an integer',
        'boolean' => 'value is a boolean', 
        'array' => 'value is an array',
        default => 'unknown type'
    };

    echo "$res <br>";

}
echo '<br>';
// $seasons = ["Spring", "Summer", "Autumn", "Winter"];

// while (list($idx , $val) = each($seasons)) {
//     echo "$val <br>";
// }
echo '<br>';
$days = [ "Monday", "Tuesday", "Wednesday", "Thursday", "Friday",
              "Saturday", "Sunday" ];

$len = count($days);

for ($i = 0; $i < $len; $i++) {

    echo $days[$i], "<br>";
}
echo '<br>';

$lable = "A";
echo gettype($lable);

if (gettype($lable == "string")){
    echo "done";
}
echo "<br>";

function get_data($country,$name,$age,$address){
    if($address == null){
        $address = "Private Address";
    }
    $line_one = "Your Country Is $country And Your Name Is $name <br>";
    $line_two = "Your age Is $age And You Live In $address";
    return $line_one . $line_two ;
}
echo get_data("EG","HA","2", null);
echo "<br>";echo "<hr>";

$group_of_skills = ["HTML","CSS","JS","PHP"];

function get_data1($name , $country="Private", ...$skills){
    echo "Hello $name Your Country Is $country <br>";
    foreach ($skills as $skill):
        echo "-- $skill <br> ";
    endforeach;
}
// get_data1 ("Hassan","Egypt",...$group_of_skills);
//  get_data1 ("Hassan",skills: ...$group_of_skills); echo "<hr>";


echo substr_count("Hello Hello","l");
echo '<br>';
echo strpos("Hello Hello","l");
echo '<br>';
echo substr_replace("Elmalik_Web_School","A",8,-100);
echo '<br>';

function deep_freezer($item)
{
    if($item == 'water'){
        echo 'Make It Ice <br>';
    }elseif($item == 'cocacola'){
        echo 'Make It Cold <br>';
    }elseif($item == 'fruit'){
        echo 'Make It Fresh <br>';
    }else{
        echo 'Invalid Item <br>';
    }
}

deep_freezer('water');
deep_freezer('cocacola');
deep_freezer('fruit');
deep_freezer('remote');

function deep_freezer2($item)
{
   echo  match ($item){
    'water' => 'make it ice <br>',
    'cocacola' => 'make it cold <br>',
    'fruit' => 'make it fresh <br>',
    default => 'unknown item',
    };
}
deep_freezer2('water');
deep_freezer2('cocacola');
deep_freezer2('fruit');
deep_freezer2('remote');
echo '<Br>';

function get_data2(...$data)
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

$group_data = ([2 => 'Hassan' , 36]);

$x = @get_data2( ...$group_data);
echo $x;

// function get_data3($country,$name,$age ,$address){
    
//    unset($address);
//     if( func_get_arg(3) !== defined($address)){
//         $address = "Private Address";
//     }
 
//     $line_one = "Your Country Is $country And Your Name Is $name <br>";
//     $line_two = "Your Age Is $age And You Live In $address";
//     return $line_one . $line_two ;
// }

// echo get_data(1,2,3,); echo "<hr>";
echo '<hr>';
echo lcfirst("Hassan Nabil");
echo ucfirst("hassan nabil");
echo strtolower("HASSAN NABIL");
echo strtoupper("hassan NABIL");
echo "<br>";
echo ucwords("hassan nabil");
echo "<br>";
echo ucwords("hassan nab#il","#");
echo "<br>";
echo ucwords("hassan nabil#","#");
echo "<br>";
echo str_repeat("hassan<br>",5);

$str = ["hassan", "nabil" , 'Elmalik'];
echo implode($str);
echo "<br>";
echo implode(" ",$str);
echo "<br>";
echo implode("!",$str);
echo "<br>";
echo join("!",$str);
echo "<br>";

$str2 = "hassan nabil elmalik";
echo "<pre>";
print_r (explode(" ",$str2));
print_r (explode("a",$str2));
print_r (explode("@",$str2));
print_r (explode("ss",$str2));
print_r (explode("nn",$str2));
echo "</pre>";

echo str_shuffle("hassan");
echo "<br>";
echo strrev("hassan   ");
echo "<br>";
echo "hassan<br>nabil";
echo "<br>";
echo strlen(trim("    <br> has san<br>na bil       " , "<br>" ));
echo (trim("    <br> has san<br>na bil       " , "<br>" ));
echo "<br>";

echo chunk_split("hassan web school", "4", "<br>");
echo '<pre>';
print_r(str_split("hassan"));
print_r(str_split("hassann",3));
echo '</pre>';
echo strip_tags("hassan<br>nabil<br>elmalik");
echo '<hr>';

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$func = function () use ($array) {
    return  min($array);
};


var_dump(array_reduce($array, $func)) ;
echo '<br>';

$nums = ["A", "B", "C", "D", "E"];
foreach(array_rand($nums,3) as $num){
    echo'<pre>';
    print_r($nums[$num]);
    echo'</pre>';
}

$array = [10, 20, 30, 40, 50, 60, 5, 70, 80, 90, 100];
function min2($n1,$n2){

 if($n2<$n1){
    echo $n2;
 }


}
echo array_reduce($array, "min2",30);

$mix = [1, 2, 3, "A", "B", "C",  7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix,3,3);
// next($mix);

echo '<pre>';
print_r($mix);
echo '</pre>';