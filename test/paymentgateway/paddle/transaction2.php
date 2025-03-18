<?php

namespace paymentgateway\paddle;

class transaction2 
{
public static int $count = 0;

public function __construct (
    public float $amount,
    public string $description
){

}

public function process()
{
    echo 'processing paddle transaction...';
}

}

