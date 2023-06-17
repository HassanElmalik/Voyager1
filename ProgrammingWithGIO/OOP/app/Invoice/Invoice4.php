<?php

class Invoice4
{
    public function process2()
    {
        var_dump('process2');
    }
    protected function process3()
    {
        var_dump('process3');
    }
    protected function process5($amount, $description)
    {
        var_dump( $amount, $description);
        var_dump('process5');
    }
    public function __call($name, $arguments)
    {
        if(method_exists($this, $name)){
            call_user_func_array([$this, $name], $arguments);
           echo 'magic method';
        }
        else{
        var_dump($name, $arguments);
        }
    }
    public static function __callStatic($name, $arguments)
    {
        var_dump('static', $name, $arguments);
    }
}