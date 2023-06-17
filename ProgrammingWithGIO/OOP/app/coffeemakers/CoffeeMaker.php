<?php

class CoffeeMaker
{
    public static string $foo = 'bar';

    public function makeCoffee()
    {
        echo static::class . ' is making coffee <br>';
    }
}