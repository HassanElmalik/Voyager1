<?php

class classAB 
{
    public function __construct(public int $x, public int $y)
    {
        
    }
    public function foo(): string
    {
        return 'foo';
    }
    public function bar(): object
    {
        return new class($this->x, $this->y) extends ClassAB{
            public function __construct(public int $x, public int $y)
            {
                parent::__construct($x,$y);
                echo $this->foo();
            }
        };
    }
    public function bar2(): object
    {
        return new class($this->x, $this->y){
            public function __construct(public int $x, public int $y)
            {
                var_dump($x,$y);
            }
        };
    }
  
}