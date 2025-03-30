<?php

// 34-PHP_OOP_Tutorial_Section_2_-_Intro_to_Object_Oriented_Programming_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 34 \"PHP OOP Tutorial Section-2 Intro to Object Oriented Programming\"</u></h3>";

echo "in procedural programming an application or a program is divided into a set of functions that operate in some sort of data that are stored in variables,
so you basically have some sort of global state or variables and then bunch of functions that works with those variables , you could also have functions that call other functions 
and so on ,in object orinted programming however you are basically combine or bundleing related functions and variables into something called a class from which you create objects,
you could access variables and call function of the object if they publically avilable , we refer to the variables of the object or the class as properties ,and the functions as methods
, so what exactly is a class , and what is the difference betwn the class and an object,in simble term basically , a class is a blueprint, and an object is something that u create or build
from that blueprint, you can have many objects of the same class, but each of these objects can be diffn , lets take a house as an example, the blueprint of the house colud be ur class ,
and the house itself could be the object, you colud have multible houses based in the same blueprint with slite diffns, in other words objects are simpley instances of the classes,
the main advantage of oop is the ability to structure ur code in a better way which is easier to maintain , test , extend, debug, and so on, there are some use cases for a procedural programming
it might be a good pick for a small project that does not require many features or much maintinance and you are the only one working on it or maybe its a simple cron script, but as ur code grows 
and ur project requirments increase you will find ur self in a trap where modifing,extending and maintaining that code becomes diffculte espicially when u working with teams,this is where oop can
help u <br> does OOP means MVC? No and this is the miss conception that i see alot , and oop php is not automatically implies mvc , oop is a programming paradigm , while mvc is an arcitucture pattern
of modern view controller which uses the oop principles.<br>";

echo "OOP has 4 main principles are: <b>Encapsulation-Abstraction-Inheritance-Polymorphism</b> <br>";
echo "what we will learn in this section: ";
echo "<li>Objects & Classes</li>";
echo "<li>Magic Methods</li>";
echo "<li>Code Style & PSR</li>";
echo "<li>Name Spaces , Auto Loading & Composer</li>";
echo "<li>Encapsulation</li>";
echo "<li>Abstraction</li>";
echo "<li>Inheritance</li>";
echo "<li>Polymorphism</li>";
echo "<li>Traits & Statics</li>";
echo '<li>Super Globals (_$POST,...)</li>';
echo '<li>Cookies & Sessions</li>';
echo '<li>Connect to Databases</li>';
echo '<hr>';

// 35-PHP_Docker_Tutorial_-_Nginx_-_PHPFPM_VS_Apache_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 35 \"PHP Docker Tutorial Nginx PHP-FPM VS Apache\"</u></h3>";

echo "docker vs exampp,
exampp is good for local develop , but it lacks of features and also its not meant for production , this can introduce some issues 
if your loacal inviroment is diffn from your production inviroment and what works in your loacl might not work in production and 
vice versa this is where docker can help you , you can be sure that your loacl devlopment inviroment is very close to your production
inviroment , docker will also allows you to work in multiple projects at the same time even if your php versions are
diffn , it basicly let you bundel your development inviroment in isolated containers that are portable , this 
is hard to achive with exampp if sometimes it is impossible, for example say that you have three clients
or working with three diffn projects and all three of those use 3 diffn versions of php
as well as some other services , docker can be used to set up this easily you can containeries your dependcies
and your entire project which then can be easily shared deleted or ported over to another OS as shown here we 
pundeling every thing that a project needs in a single container so we have a container that have php webserver 
database and so on this can work probably but its not ideal because you coupling all your services into a single container , 
you can split this to a multiple containers and have a separate cotainer for a web server , a separate container for a php, 
a separate container for a database ,and so on , decoupling the services is always good because you can easily swap on 
containers out with another instead of messing with the container that contain everything
i do want to cover some basics and explain the terms that you will hear and use when working with docker , 
like container images docker-file docker-compose and so on , a container as mentioned befor basicly bundels up the 
application with all of its dependceies and nessecary configration you could have all your dependcies installed under one container 
or you could have separate containers for thos dependncies , docker container begines as a simple vanilla linux machine that
does not have anything installed for the application , then we tell the container what needs to be installed like all the dependncies
that are needed to run the application , this is done through a file called docker file , a docker file is a text file 
where you write a instructions on how to build a docker image and the docker image is a read only excutable packege that 
includes everything that you need to run your application like source-code dependencies enviroment variables configurations 
and so on , so docker images and containers are prrety much the same , the diffn is that the images are read only and they 
can exsist without containers , however for containers to run they need an image in a way you can think of images like 
template you cant run or start this images instead you can use them as a base or template to build your containers so 
essantially a container is just a run time instance of an image that can now be modified , these images are containers are 
stored in repositories that might stored in private or public repositories like docker hub for example , you can then pull those 
image from the repository and use them to build your containers on local stageing or in production.
we will be install php with nginx and php-fpm an i will explain what fpm is, apache by default comes with something called 
mod-php it basicaly means that php inteperater is empeded within apache webserver and runs php as an apache module , 
if you look at php from dump from our application in the browser that is running apache with exampp we see that the server 
api says that its apache 2.0 handler that basically indicator that we are using mod-php , the down side of mod-php is that 
the foot print for each apache process is larger because it require more resources when the php intepreater is empeded within apache
, the process will still contain php intepreter even if is the request is for non php files like static files for example , 
though this can be solved by using conant delivery network (CDN) to load ur acids but thats a topic maybe for another lesson, 
php-fpm satnds for php fast cgi process manager which is basicly an alternative more advanced implmentation of fast cgi 
its a gate way tha seats between your web server and your php code , so when the php file is requested , 
ngix will comunicate with php-fpm and have it process only the php files and not the static files like style sheets or images , 
note that u can use php fpm with apache as well as nginx but for this lesson we will set it up with nginx , 
so would u use nginx with php-fpm instead of apache? , it realy depends on ur application and what u want to do if u already 
work with apache u dont have to switch to nginx unless u facing some issues and want to try nginx but usually its not worth the 
time u need to spend to switch from apache to nginx. <br> ";
// print_r ($_SERVER);
echo "</pre>";
echo '<hr>';

// ------------------------------------------------------------------------------------------------------------------------------
// 36-PHP_Classes_Objects_-_Typed_Properties_-_Constructors_Destructors_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 36 PHP-Classes-Objects Typed-Properties Constructors-Destructors</u></h3>";

require_once 'Transaction.php';
echo "<pre>";
$transaction1 = new Transaction(20, 'Transaction');
var_dump($transaction1);
echo "<br>";
var_dump($transaction1->view);
echo "<br>";
// $transaction1->getAmount() = 15;
var_dump($transaction1->getAmount());
echo "<br>";
$transaction1 = null;

$transaction2 = new Transaction(100, 'Transaction');
var_dump($transaction2);
echo "<br>";

$transaction2->addTax(8);
$amount = $transaction2->getAmount();
var_dump($amount);
echo "<br>";

$transaction2 = new Transaction(100, 'Transaction');
$transaction2->applyDiscount(10);
var_dump($transaction2->getAmount());
echo "<br>";
unset($transaction2);

$class = 'Transaction';
$transaction3 = (new $class(30, 'Transaction'))
    ->addTax(30)
    ->applyDiscount(40)
    ->getAmount();
var_dump($transaction3);
echo "<br>";

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str, true);
var_dump($arr);
echo "<br>";
$arr = json_decode($str);
var_dump($arr);
echo "<br>";
var_dump($arr->a);
echo "<br>";
var_dump($arr->c);
echo "<br>";

$obj = new \stdClass();
$obj->a = 1;
$obj->b = 2;
var_dump($obj);
echo "<br>";

$arr = [1, 2, 3];
var_dump((object) $arr);
echo "<br>";
var_dump(((object) $arr)->{1});
echo "<br>";
var_dump(((object) $arr)->{0});
echo "<br>";

var_dump((object) 1);
echo "<br>";
var_dump(((object) 1)->scalar);
echo "<br>";
var_dump((object) false);
echo "<br>";
var_dump(((object) false)->scalar);
echo "<br>";
var_dump((object) null);
echo "</pre>";
echo '<hr>';

// ------------------------------------------------------------------------------------------------------------------------------
// 37-Constructor_Property_Promotion_-_Nullsafe_Operator_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 37 Constructor-Property_Promotion Nullsafe-Operator</u></h3>";

echo "<pre>";
echo "constructor property promotion is a feature that was added in php 8.0, it allows you to get rid of 
boilar break code where you define properties and assigen them to arguments that passed in your constructor
basically let you combine class-properties consturctor and assigenment into one shorter syntax<br><br>";

$class = new Transaction2(10, 'Hi', 5,);
var_dump($class);

require_once 'PaymentProfile.php';
require_once 'Customer.php';
require_once 'Transaction.php';

$transaction = new Transaction3(5, 'Test');
echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';

$profileId = null;
if ($customer = $transaction->getCustomer()) {
    if ($paymentProfile = $customer->getPaymentProfile()) {
        $profileId = $paymentProfile->id;
    }
}

echo $profileId;
echo "</pre>";
echo '<hr>';


// ------------------------------------------------------------------------------------------------------------------------------
// 38-PHP_Namespace_Tutorial_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 38-PHP Namespace Tutorial</u></h3>";

echo "<pre>";
$direc = 'app';
require_once $direc . '\Stripe\Transaction.php';
require_once $direc . '\Paddle\Transaction.php';
require_once $direc . '\Paddle\Customer.php';
require_once $direc . '\Paddle\DateTime.php';
require_once $direc . '\Notification\Email.php';


// spl_autoload_register(function($class){
//     $path = __DIR__ . '\\' . lcfirst(str_replace('\\OOP\\Paddle\\TransactionStripe', '\\Paddle\\Transaction',$class)) . '.php';
//    if(file_exists($path)){
    //       require $path;
//   }  
//     var_dump($path);
// });

use App\OOP\Paddle as PA;
//or
use App\OOP\Paddle\TransactionStripe;
use Ramsey\Uuid\UuidFactory;

var_dump(new PA\TransactionStripe());
//or
var_dump(new TransactionStripe());

var_dump(new App\OOP\Stripe\TransactionStripe());
echo "</pre>";
echo '<hr>';

//--------------------------------------------------------------
// 39-PHP_Coding_Standards_Autoloading_PSR-4_Composer_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 39-PHP Coding Standards Autoloading PSR-4 Composer</u></h3>";

echo "<pre>";
// spl_autoload_register(function($class){
    //     $path = __DIR__ . '\\' . lcfirst(str_replace('\\OOP\\Paddle\\TransactionStripe', '\\Paddle\\Transaction',$class)) . '.php';
    //    if(file_exists($path)){
        //       require $path;
        //   }  
        //     var_dump($path);
        // });
        $paddleTransaction = new TransactionStripe();
        require  '/xampp/htdocs/Voyager1/vendor/autoload.php';
        $id = new UuidFactory();
        echo $id->uuid4() , '<br>';
        var_dump($paddleTransaction);
        echo '<br>';
        echo "</pre>";
        echo '<hr>';

//---------------------------------------------------------------
// 40-Object_Oriented_PHP_-_Class_Constants_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 40-Object-Oriented-PHP Class-Constants</u></h3>";

require_once $direc . '\Enums\Status.php';
echo '<pre>';

echo "class constants are alocated once per class and not per instance, which menas 
that we dont need to have the instance of the class to access the class constants<br>",
"there are many use cases for constants, if u have data or information that does not change
and keep refrencing all over the code , its better to move it to a class constant , so that way
if you ever change it you only change it in one place, another use cases to define constants as 
sort of enumeration or enums , the same i just did it for transaction , it allows you to not hardcode 
this values, if you notice that u r hardcoding a peice of data , consider to change it to a constant";

echo Status::PAID;
echo '<br>---------<br>';
$transaction = new Transaction(1, 's'); // will print declined
echo "---------<br>---------<br>";
echo Status::PAID;
echo '<br>---------<br>';
echo $transaction::class; // it will print the fully qualified name of the class
echo '<br>---------<br>';

$transaction->setStatus(Status::PAID);
echo '<br>---------<br>';
var_dump($transaction);
echo '---------<br>';
echo '</pre>';
echo '<hr>';

//---------------------------------------------------------------
// 41-Static_Properties_Methods_In_Object_Oriented_PHP_-_Full_PHP_8_Tutorial
echo "<h3><u>Lesson 41-Static Properties Methods In Object Oriented PHP</u></h3>";

echo '<pre>';

echo "you dont actually need the objects to access the static methods and properties of the class
because they not created and they not assosiated per object, they are created and they are asosiated
on class basis , so they belong to class itself and not any particular object or instance, what that
means is that the regular class properties , every time you create an instance , this properties get
created and get asosiated to that specific object , so you could have multible diffn transaction objects
and each one can have diffn values for those properties, you can think of static property as global 
variables in a way thier values are shared across the objects, because they are not tide to a particular
object or instance they tide to the class it self <br>",
"Because the access of the static methods does not require an instance of the class and because they belong to the class itself and not to a particular
object the variable \$this is not availabe in static method, so instead of using \$this variable u
would have to use the self keyword , you cannot access non static objects statically and same applies to 
methods<br>",
"the use static properties and methods are generaly a bad practice , but there are some use cases where use
statics come in handy , <br>";

var_dump($transaction::$count);
var_dump(Transaction::$count);
var_dump(Transaction::$count2);
$transaction = new Transaction(1, 's');
$transaction = new Transaction(1, 's');
$transaction = new Transaction(1, 's');
var_dump(Transaction::$count2);
var_dump($transaction::$count2);

var_dump(Transaction::getcount3());
var_dump($transaction->getcount3());
var_dump($transaction->$count);

require_once $direc . '\DB\DB.php';
// $db = new DB([]);
// $db = new DB([]);
// $db = new DB([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
echo '</pre>';
echo '<hr>';


// 42-PHP_-_Encapsulation_Abstraction_-_Full_PHP_8_Tutorial 
$transaction5 = new Transaction(25, 'ok');
$transaction5->process();
echo '<br>';
$transaction5->setAmount(125);
$transaction5->process();
echo '<br>';

$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setValue($transaction5, 250);
var_dump($reflectionProperty->getvalue($transaction5));
$transaction5->process();
echo '<br>';

$transaction5->copyFrom(new Transaction(500, 'yes'));
echo '<hr>';


// 43-PHP_-_Inheritance_Explained_-_Is_Inheritance_Good_-_Full_PHP_8_Tutorial
require_once $direc . '\Toaster\Toaster.php';
require_once $direc . '\Toaster\ToasterPro.php';

$toaster = new Toaster('foo');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster2 = new ToasterPro('bar', 5);
$toaster2->addSlice('bread');
$toaster2->addSlice('bread');
$toaster2->addSlice('bread');
$toaster2->addSlice('bread');
$toaster2->addSlice('bread');
$toaster->toast();
$toaster2->toast();
$toaster2->toastBegel();
$toaster2->foofunc();

bar($toaster2);
//bar($toaster); this is not going to work because toaster is not a toasterpro
function bar(ToasterPro $toasterpro)
{
    $toasterpro->toast();
    $toasterpro->toastBegel();
}
bar2($toaster2); // this is going to work because toasterpro is a toaster
bar2($toaster);
function bar2(Toaster $toaster)
{
    $toaster->toast();
    // $toaster->toastBegel(); this method is not in Toaster class
}

require_once $direc . '\Toaster\FancyOven.php';
$toaster3 = new FancyOven($toaster2);
$toaster3->toastBegel();
$toaster3->fry();
echo '<hr>';


// Abstract_Classes_Methods
require_once $direc . '\Field\Field.php';
require_once $direc . '\Field\Text.php';
require_once $direc . '\Field\Boolean.php';
require_once $direc . '\Field\Checkbox.php';
require_once $direc . '\Field\Radio.php';

$fields = [
    new Text('textField'),
    new Checkbox('checkboxField'),
    new Radio('radioField'),
];
foreach ($fields as $field) {
    echo $field->render() . '<br>';
}
echo '<hr>';

// Interfaces_Polymorphism_-_Interfaces_Explained
require_once $direc . '\DebtCollector\DebtCollector.php';
require_once $direc . '\DebtCollector\CollectionAgency.php';
require_once $direc . '\DebtCollector\DebtCollectionService.php';
require_once $direc . '\DebtCollector\Rocky.php';

$collector = new CollectionAgency();
echo $collector->collect(100);
echo '<br>';

$service = new DebtCollectionService();
echo $service->collectDebt(new CollectionAgency());
echo '<br>';
echo $service->collectDebt(new Rocky());
echo '<hr>';


//What_Are_PHP_Magic_Methods_How_They_Work
require_once $direc . '\Invoice\Invoice.php';
$invoice = new Invoice(10);
echo $invoice->Inv;
echo '<br>';
$invoice->Inv = 15;
echo $invoice->Inv;

require_once $direc . '\Invoice\Invoice2.php';
$invoice2 = new Invoice2();
$invoice2->amount = 35;
var_dump($invoice2);
var_dump(isset($invoice2->amount));
var_dump(isset($invoice2->Inv2));
var_dump($invoice2);
echo Invoice2::$Hello;
// Invoice2::$amount; you cant access undifined argument statically
unset($invoice2->amount);
var_dump(isset($invoice2->amount));
var_dump($invoice2);

require_once $direc . '\Invoice\Invoice3.php';
$invoice3 = new Invoice3();
$invoice3->process();
$invoice3->process(1, 2, 3);
Invoice3::process(4, 5, 6); // with static call method we can access undifined method statically

require_once $direc . '\Invoice\Invoice4.php';
$invoice4 = new Invoice4();
$invoice4->process2(1, 2, 3);
$invoice4->process3(1, 2, 3);
$invoice4->process4(1, 2, 3);
$invoice4->process5(1, 2, 3);
echo '<br>';

require_once $direc . '\Invoice\Invoice5.php';
$invoice5 = new Invoice5();
echo $invoice5;
var_dump($invoice5 instanceof Stringable);
var_dump($invoice instanceof Stringable);

require_once $direc . '\Invoice\Invoice6.php';
$invoice6 = new Invoice6();
$invoice6();
var_dump(is_callable($invoice6));
var_dump(is_callable($invoice));

require_once $direc . '\Invoice\Invoice7.php';
$invoice7 = new Invoice7();
var_dump($invoice7);
echo '<hr>';


// What_Is_Late_Static_Binding_How_It_Works
require_once $direc . '\StaticBinding\ClassA.php';
require_once $direc . '\StaticBinding\ClassB.php';
$classA = new ClassA();
$classB = new ClassB();
echo $classA->getName();
echo $classB->getName();
echo '<br>';
echo ClassA::getName2();
echo ClassB::getName2();
echo ClassA::getName3();
echo ClassB::getName3();
var_dump(ClassA::make());
var_dump(ClassB::make());
var_dump(ClassA::make2());
var_dump(ClassB::make2());
var_dump(ClassA::make3());
var_dump(ClassB::make3());
echo '<hr>';


// Traits_How_They_Work_Drawbacks
require_once $direc . '\coffeemakers\CoffeeMaker.php';
require_once $direc . '\coffeemakers\LatteMaker.php';
require_once $direc . '\coffeemakers\CappuccinoMaker.php';
require_once $direc . '\coffeemakers\AllInOneCoffeeMaker.php';

$coffeemaker = new CoffeeMaker();
$coffeemaker->makeCoffee();

$lattemaker = new LatteMaker();
$lattemaker->makeCoffee();
$lattemaker->makeLatte();

$cappuccinomaker = new CappuccinoMaker();
$cappuccinomaker->makeCoffee();
$cappuccinomaker->makeCappuccino();

$allinonecoffeemaker = new AllInOneCoffeeMaker();
$allinonecoffeemaker->makeCoffee();
$allinonecoffeemaker->makeLatte();
$allinonecoffeemaker->makeCappuccino();

LatteMaker::foo();
echo LatteMaker::$x;
echo '<br>';

CoffeeMaker::$foo = 'foo';
LatteMaker::$foo = 'bar';
CappuccinoMaker::$foo = 'kee';
echo CoffeeMaker::$foo;
echo LatteMaker::$foo;
echo '<br>';

LatteMaker::$dell = 'dell';
AllInOneCoffeeMaker::$dell = 'dellmaker';
echo LatteMaker::$dell;
echo ' ';
echo AllInOneCoffeeMaker::$dell;
echo '<br>';

$lattemaker->foo2();
$allinonecoffeemaker->foo2();

$cappuccinomaker->makeCappuccino3();
echo '<hr>';


// Anonymous_Classes
$obj = new class(1, 2, 3) {
    public function __construct(public int $x, public int $y, public int $z) {}
};
var_dump($obj);
var_dump(get_class($obj));
foo($obj);
function foo($obj)
{
    var_dump($obj);
}

require_once $direc . '\AnonymousClasses\ClassAB.php';
$obj2 = new ClassAB(1, 2);
var_dump($obj2->bar());
var_dump($obj2->bar2());
echo '<hr>';


// Variable_Storage_Object_Comparison_Zend_Value_zval
require_once $direc . '\comparison\comparison.php';
$comparison1 = new comparison(25, 'My comparison 1');
$comparison2 = new comparison(100, 'My comparison 2');
echo 'comparison1 == comparison2';
var_dump($comparison1 == $comparison2);
echo 'comparison1 === comparison2';
var_dump($comparison1 === $comparison2);

$comparison3 = new comparison(1, 'My comparison');
$comparison4 = new comparison(true, 'My comparison');
echo 'comparison3 == comparison4';
var_dump($comparison3 == $comparison4);
echo 'comparison3 === comparison4';
var_dump($comparison3 === $comparison4);

$comparison5 = $comparison4;
echo 'comparison5 == comparison4';
var_dump($comparison4 == $comparison5);
echo 'comparison5 === comparison4';
var_dump($comparison4 === $comparison5);
var_dump($comparison5, $comparison4);
$comparison5->amount = 50;
var_dump($comparison5, $comparison4);

require_once $direc . '\comparison\coustomcomparison.php';
$comparison6 = new comparison(1, 'My comparison');
$comparison7 = new coustomcomparison(true, 'My comparison');
echo 'comparison6 == comparison7';
var_dump($comparison6 == $comparison7);
echo 'comparison6 === comparison7';
var_dump($comparison6 === $comparison7);
var_dump($comparison6, $comparison7);

require_once $direc . '\comparison\easy.php';
require_once $direc . '\comparison\comparison2.php';
$comparison8 = new comparison2(new easy('easy1'), 25, 'My comparison2');
$comparison9 = new comparison2(new easy('easy1'), 25, 'My comparison2');
echo 'comparison8 == comparison9';
var_dump($comparison8 == $comparison9);
echo 'comparison8 === comparison9';
var_dump($comparison8 === $comparison9);
$comparison10 = new comparison2(new easy('easy1'), 25, 'My comparison2');
$comparison11 = new comparison2(new easy('easy2'), 25, 'My comparison2');
echo 'comparison10 == comparison11';
var_dump($comparison10 == $comparison11);
echo 'comparison10 === comparison11';
var_dump($comparison10 === $comparison11);

// $comparison10->linkedcomparison = $comparison11;
// $comparison11->linkedcomparison = $comparison10;
// echo 'comparison10 == comparison11';
// var_dump($comparison10 == $comparison11);
// echo 'comparison10 === comparison11';
// var_dump($comparison10 === $comparison11);
echo '<hr>';


// 51-DockBlock_-_Adding_Comments_to_Classes_Methods

/**
 * Docblock
 * @param can be used to document an argument of a function or a method
 * @return can be used to document the return type
 * these tags are specially usefull if you not type hinting or u simpley 
 * want to provide some additional information about the argument or return type
 */

/**
 * @throws indicates what excepition or exceptions are expected to be 
 * thrown by this method or the function
 */

/**
 * @var used to document the type of the properties, variables and constants
 * these var tage is specially usefull when working with loops if u are looping
 * over a collection or an arrray of objects where each element is an object
 * of some class you can type hint that using the var tag
 */

/**
 * @property this allow a class to know which magic properties are available
 * @method this allow a class to know which magic methods are available
 * with help of this tags you can speceify what properties and methods
 * are avilable in this class (magic properties and methods)
 * @property-read int $y this property is only for read
 * @property-write int $x this property is only for write
 * @property this gives avialble for both read and write
 * @method int foo(string x)
 */


// 52-Object_Cloning_Clone_Magic_Method


// 53-Serialize_Objects_Serialize_Magic_Methods


// 54-Error_Handling_In_PHP_-_Exceptions_Try_Catch_Finally_Blocks


// 55-PHP_-_DateTime_Object_-_Full_PHP_8_Tutorial


// 56-PHP_Iterators_Iterable_Type_-_Iterate_Over_Objects_-_Full_PHP_8_Tutorial


// 57-PHP_Superglobals_-_Basic_Routing_Using_The_Server_Info_-_Full_PHP_8_Tutorial