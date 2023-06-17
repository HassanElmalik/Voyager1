<?php

include __DIR__ . '\CappuccinoTrait.php';

class CappuccinoMaker extends CoffeeMaker
{
  use CappuccinoTrait{
    CappuccinoTrait::makeCappuccino3 as public;
  }
}