<?php

class Food extends Product{
  public $weight;
  public $flavor;

  /**
   * @param String $_weight
   * @param String $_flavor
   */
  public function __construct($_id, $_name, $_brand, $_image, $_price, Category $_category, $_weight, $_flavor)
  {
    $this->weight = $_weight;
    $this->flavor = $_flavor;

    parent::__construct($_id, $_name, $_brand, $_image, $_price, $_category);
    $this->id = '#food' . $_id;
  }
}