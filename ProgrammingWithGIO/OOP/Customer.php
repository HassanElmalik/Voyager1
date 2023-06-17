<?php

class Customer{
    private ?PaymentProfile $paymentprofile = null;

    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentprofile;
    }
}