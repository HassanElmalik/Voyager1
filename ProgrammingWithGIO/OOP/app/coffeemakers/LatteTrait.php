<?php

trait LatteTrait
{
    protected string $milkType = 'whole_milk';
    private string $milkType2 = 'whole_milk2';
    public static int $x = 1;
    public static string $dell;

    public function makeLatte()
    {
        echo static::class . ' is making latte ' . $this->milkType . '<br>';
        echo static::class . ' is making latte ' . $this->milkType2 . '<br>';
        echo __CLASS__ . ' is making latte ' . $this->getPowderMilk() . '<br>';
        echo static::class . ' is making latte ' . $this->getsugar() . '<br>';
        echo static::class . ' is making latte ' . $this->getcaramel() . '<br> <br>';
    }

    public function getPowderMilk():string
    {
        return 'with powder_milk';
    }

    public function getsugar():string
    {
        if(property_exists($this, 'sugartype')){
            return $this->sugartype;
        }

        return '';
    }

    public abstract function getcaramel();

    public function setmilktype(string $milkType2):static
    {
        $this->milkType2 = $milkType2;

        return $this;
    }

    public static function foo()
    {
        echo 'foo bar <br>';
    }

    final public function foo2()
    {
        echo 'foo2 from lattetrait <br>';
    }
}