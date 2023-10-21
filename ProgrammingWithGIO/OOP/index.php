<?php


// 34-PHP_OOP_Tutorial_Section_2_-_Intro_to_Object_Oriented_Programming_-_Full_PHP_8_Tutorial


// 35-PHP_Docker_Tutorial_-_Nginx_-_PHPFPM_VS_Apache_-_Full_PHP_8_Tutorial


// 36-PHP_Classes_Objects_-_Typed_Properties_-_Constructors_Destructors_-_Full_PHP_8_Tutorial
require_once 'Transaction.php';
$transaction1 = new Transaction(20, 'Transaction');
var_dump($transaction1);
var_dump($transaction1->view);
// $transaction1->getAmount() = 15;
var_dump($transaction1->getAmount());
$transaction1 = null;

$transaction2 = new Transaction(100, 'Transaction');
var_dump($transaction2);

$transaction2->addTax(8);
$amount = $transaction2 ->getAmount();
var_dump($amount);

$transaction2->applyDiscount(10);
var_dump($transaction2->getAmount());
unset($transaction2);

$class = 'Transaction';
$transaction3 = (new $class(30, 'Transaction'))
->addTax(30)
->applyDiscount(40)
->getAmount();
var_dump($transaction3);

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str, true);
var_dump($arr);
$arr = json_decode($str);
var_dump($arr);
var_dump($arr->a);
var_dump($arr->c);

$obj = new \stdClass();
$obj->a =1;
$obj->b =2;
var_dump($obj);

$arr = [1,2,3];
var_dump((object) $arr);
var_dump(((object) $arr)->{1});
var_dump(((object) $arr)->{0});

var_dump((object) 1);
var_dump(((object) 1)->scalar);
var_dump((object) false);
var_dump(((object) false)->scalar);
var_dump((object) null);


// 37-Constructor_Property_Promotion_-_Nullsafe_Operator_-_Full_PHP_8_Tutorial
$class = new Transaction2(10,'Hi', 5,);
var_dump($class);

require_once 'PaymentProfile.php';
require_once 'Customer.php';
require_once 'Transaction.php';

$transaction = new Transaction3(5,'Test');
echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';

$profileId = null;
if($customer = $transaction->getCustomer()){
    if($paymentProfile = $customer->getPaymentProfile()){
        $profileId = $paymentProfile->id;
    }
}

echo $profileId;
echo '<hr>';


// 38-PHP_Namespace_Tutorial_-_Full_PHP_8_Tutorial
$direc = 'C:\xampp\htdocs\elmalik\ProgrammingWithGIO\OOP\app';
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

var_dump(new PA\TransactionStripe());
//or
var_dump(new TransactionStripe());

var_dump(new App\OOP\Stripe\TransactionStripe());
echo '<hr>';


// 39-PHP_Coding_Standards_Autoloading_PSR-4_Composer_-_Full_PHP_8_Tutorial

// spl_autoload_register(function($class){
//     $path = __DIR__ . '\\' . lcfirst(str_replace('\\OOP\\Paddle\\TransactionStripe', '\\Paddle\\Transaction',$class)) . '.php';
//    if(file_exists($path)){
//       require $path;
//   }  
//     var_dump($path);
// });
// require __DIR__ . '/../vendor/autoload.php';
// $id = new /Ramesy/Uuid/UuidFactory();
// echo $id->uuid4();
// $paddleTransaction = new TransactionStripe();
// var_dump($paddleTransaction);


// 40-Object_Oriented_PHP_-_Class_Constants_-_Full_PHP_8_Tutorial
require_once $direc . '\Enums\Status.php';

echo Status::STATUS_PAID;
echo '<br>';
$transaction = new Transaction(1, 's');
echo Status::STATUS_PAID;
echo $transaction::class;

$transaction->setStatus(Status::STATUS_PAID);
var_dump($transaction);
echo '<hr>';


// 41-Static_Properties_Methods_In_Object_Oriented_PHP_-_Full_PHP_8_Tutorial
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
echo '<hr>';


// 42-PHP_-_Encapsulation_Abstraction_-_Full_PHP_8_Tutorial 
$transaction5 = new Transaction(25,'ok');
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

$transaction5->copyFrom(new Transaction(500,'yes'));
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
function bar(ToasterPro $toasterpro){
    $toasterpro->toast();
    $toasterpro->toastBegel();
}
bar2($toaster2); // this is going to work because toasterpro is a toaster
bar2($toaster); 
function bar2(Toaster $toaster){
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
foreach($fields as $field){
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
$invoice = new Invoice (10);
echo $invoice ->Inv;
echo '<br>';
$invoice ->Inv = 15;
echo $invoice ->Inv;

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
$invoice3 -> process();
$invoice3 -> process(1, 2, 3);
Invoice3::process(4, 5, 6); // with static call method we can access undifined method statically

require_once $direc . '\Invoice\Invoice4.php';
$invoice4 = new Invoice4();
$invoice4 -> process2(1, 2, 3);
$invoice4 -> process3(1, 2, 3);
$invoice4 -> process4(1, 2, 3);
$invoice4 -> process5(1, 2, 3);
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
$obj = new class(1,2,3) {
    public function __construct(public int $x, public int $y, public int $z)
    {
        
    }
};
var_dump($obj);
var_dump(get_class($obj));
foo($obj);
function foo($obj)
{
    var_dump($obj);
}

require_once $direc . '\AnonymousClasses\ClassAB.php';
$obj2 = new ClassAB(1,2);
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