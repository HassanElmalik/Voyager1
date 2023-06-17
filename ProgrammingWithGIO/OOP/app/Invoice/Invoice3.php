<?php

class Invoice3
{
    public function __call($name, $arguments)
    {
        var_dump($name, $arguments);
    }
    public static function __callStatic($name, $arguments)
    {
        var_dump('static', $name, $arguments);
    }
}