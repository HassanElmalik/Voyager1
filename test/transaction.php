<?php 

// declare(strict_types=1);

class transaction 
{

    private ?customer $customer = null;

    public function __construct (private float $amount,private string $description)
    {
        
    }

    public function getcustomer (): ?customer
    {
        return $this->customer;
    }

}