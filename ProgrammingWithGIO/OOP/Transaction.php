<?php

declare(strict_types = 1);

require_once 'C:\xampp\htdocs\elmalik\ProgrammingWithGIO\OOP\app\Enums\Status.php';

class Transaction 
{
    public $view;
    public ?float $price = null;
    public string $total;

    private float $amount;
    private string $description;

 
    private string $status = 'pending';

    public static int $count = 0;
    public static int $count2 = 0;
    private static int $count3 = 0;
   

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount; 
        $this->description = $description; 

        var_dump(Status::STATUS_DECLINED);
        $this->setStatus(Status::STATUS_PENDING);

        self::$count2 ++;
    }

    public function addTax(float $rate):Transaction
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }
    
    public function applyDiscount(float $rate):Transaction
    {
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount():float
    {
        return $this->amount;
    }
    public function copyFrom(Transaction $transaction)
    {
        var_dump($transaction->amount, $transaction->sendEmail());
    }

    public function process()
    {
        echo 'processing ' . $this->amount . ' transaction';

        $this->generateReceipt();
        $this->sendEmail();
    }
    private function generateReceipt()
    {

    }
    private function sendEmail()
    {
        return true;
    }

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUES[$status])){
            throw new \InvalidArgumentException('Invalid status');
        }
        $this->status = $status;
        return $this;
    }

    public static function getcount3(): int
    {
        return self::$count3;
    }

    // public function __destruct()
    // {
    //     echo 'Destruct' . $this->description . '<br>';
    // }
}

// Constructor_Property_Promotion_-_Nullsafe_Operator

class Transaction2 
{
    private float $price;

    public function __construct(
        float $price,
        private $view,
        private float $amount,
        private ?string $description = null
        )
    {
        echo $amount;
      $this->price = $price;
    }
}

class Transaction3
{
    private ?Customer $customer = null;
    public function __construct(
        private float $amount,
        private string $description   
    ){
    }

    public function getCustomer() : ?Customer
    {
        return $this->customer;
    }
}