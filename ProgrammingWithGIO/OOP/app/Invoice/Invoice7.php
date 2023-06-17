<?php

class Invoice7
{
    private $amount;
    public int $value;
    private int $id = 123456;
    private string $accountNumber = '01206707611';

    public function __debugInfo()
    {
        return[
            'id' => $this->id,
            'accountNumber' => '*****' . substr($this->accountNumber, -4),
        ];
    }
}