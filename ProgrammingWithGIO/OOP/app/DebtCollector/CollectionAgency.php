<?php

class CollectionAgency implements DebtCollector,AnotherInterface
{
    public const MYCONSTANT = 2;

    public function __construct()
    {
        
    }

    public function collect(float $owedAmount): float
    {
        $guranteed = $owedAmount * 0.5;
        return mt_rand($guranteed, $owedAmount);
    }   

    public function foo(){

    }
}