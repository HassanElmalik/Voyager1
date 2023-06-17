<?php

include __DIR__ . '\LatteTrait.php';

class LatteMaker extends CoffeeMaker
{
  public string $sugartype = 'with sugar';
  public string $carameltype = 'with caramel';

  use LatteTrait;

  public function getcaramel()
  {
    return $this->carameltype;
  }

  public function foo2()
  {
    echo 'foo2 from lattemaker class <br>';
  }
}