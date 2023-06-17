<?php

class ToasterPro extends Toaster
{
    public function __construct(string $y, int $z)
    {
        parent::__construct('foo');
        $this->size = 4;
    }

    public function toastBegel()
    {
        var_dump($this);

        foreach ($this->slices as $i => $slices){
            echo ($i + 1) . ': Toasting ' . $slices . ' with begels option ' .'<br>' . PHP_EOL;
        }
    }

    public function foofunc()
    {
        // we dont need this function in ToasterPro class
        //throw new \Exception('Not Supported');
        echo 'we dont need this function in ToasterPro class <br>';
    }
}