<?php

class Toaster
{
    protected array $slices;
    protected int $size;

    public function __construct(string $x)
    {   
        $this->slices = [];
        $this->size = 2;
    }

    public function addSlice(string $slice):void
    {
        var_dump($this);

        if (count($this->slices) < $this->size){
            $this->slices[] = $slice;
        }
    }

    final public function toast()
    {
        foreach ($this->slices as $i => $slices){
            echo ($i + 1) . ': Toasting ' . $slices . '<br>' . PHP_EOL;
        }
    }

    public function foofunc()
    {

    }
}