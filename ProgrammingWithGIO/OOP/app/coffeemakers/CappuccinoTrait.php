<?php

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino <br><br>';
    }

    private function makeCappuccino2()
    {
        echo static::class . ' is making cappuccino <br><br>';
    }

    private function makeCappuccino3()
    {
        echo static::class . ' is making cappuccino in private method <br><br>';
    }
}