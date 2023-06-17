<?php

require_once __DIR__ . '\Renderable.php';

abstract class Field implements Renderable
{
    public function __construct(protected string $name)
    {
        
    }
    // abstract protected function render(): string;


}