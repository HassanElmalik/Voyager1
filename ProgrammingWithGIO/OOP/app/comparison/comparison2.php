<?php

class comparison2 
{
    public ?comparison $linkedcomparison = null;

    public function __construct(public easy $easy, public int $amount, public string $description)
    {
        
    }
}