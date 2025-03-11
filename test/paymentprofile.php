<?php

class paymentprofile
{
    public int $id;

    public function __construct ()
    {
        $this->id = rand();
    }
}