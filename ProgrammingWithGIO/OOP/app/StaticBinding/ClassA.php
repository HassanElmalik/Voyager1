<?php

class ClassA 
{
    protected string $name = 'A';
    protected static string $name2 = 'C';
    protected static string $name3 = 'E';

    public function getName(): string
    {
        var_dump(get_class($this));
        return $this->name;
    }
    public static function getName2(): string
    {
        var_dump(self::class);
    //    var_dump( get_called_class());
        return self::$name2;
    }
    public static function getName3(): string
    {
        var_dump(static::class);
    //    var_dump( get_called_class());
        return static::$name3;
    }
    public static function make()
    {
        return new ClassB();      
    }
    public static function make2()
    {
        return new self;      
    }
    public static function make3()
    {
        return new static;      
    }
}