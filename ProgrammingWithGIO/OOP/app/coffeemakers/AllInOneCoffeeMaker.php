<?php


class AllInOneCoffeeMaker extends CoffeeMaker
{
    public string $sugartype = 'with sugar';
    public string $carameltype = 'with caramel';

    use LatteTrait;
    use CappuccinoTrait;

    public function getcaramel()
  {
    return $this->carameltype;
  }
}