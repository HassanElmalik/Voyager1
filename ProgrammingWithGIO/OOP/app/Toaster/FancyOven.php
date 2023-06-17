<?php

class FancyOven
{
    // we dont need to inherite toasterpro class , instead we use something called comepsition
    public function __construct(private ToasterPro $toaster)
    {
        
    }

    public function fry()
    {
        // fry stuff
        echo 'Making potatos <br>';
    }

    public function toast()
    {
        $this->toaster->toast();
    }

    public function toastBegel()
    {
        $this->toaster->toastBegel();
    }

}