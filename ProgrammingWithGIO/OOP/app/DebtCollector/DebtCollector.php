<?php
require_once __DIR__ . '\AnotherInterface.php';
require_once __DIR__ . '\SomeOtherInterface.php';

interface DebtCollector extends AnotherInterface,SomeOtherInterface
{
    
    // public const MYCONSTANT = 2;
    public function __construct();
    public function collect(float $owedAmount): float;
}