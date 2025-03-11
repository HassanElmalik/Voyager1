<?php

class customer 
{
    private ?paymentprofile $paymentprofile = null;
    
    public function __construct (){
        echo "hello";
    }

    public function getpaymentprofile () :?paymentprofile
    {
        return $this -> paymentprofile;
    }
}