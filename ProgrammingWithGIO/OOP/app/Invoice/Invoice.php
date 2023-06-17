<?php

class Invoice
{
    protected float $Inv;

    public function __construct(float $Inv)
    {
        $this->Inv = $Inv;
    }

    public function __get(string $name)
    {
       if (property_exists($this, $name)){
            return $this->$name;
       }
       return "null";
       
    }

    public function __set(string $name, $value): void
    {
        if (property_exists($this, $name)){
           $this->$name = $value;
       }
    }
    
}