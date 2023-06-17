<?php

class Rocky extends CollectionAgency implements DebtCollector
{
    public function __construct()
    {
        
    }
    public function collect(float $owedAmount): float
    {
        return $owedAmount *= 0.65 ;
    }
    public function foo(){

    }
}