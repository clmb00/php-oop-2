<?php

class Toy extends Product{
  public $color;
  public $feature;

  /**
   * @param String $_color
   * @param String $_feature
   */
  public function __construct($_id, $_name, $_brand, $_image, $_price, Category $_category, $_color, $_feature)
  {
    $this->color = $_color;
    $this->feature = $_feature;

    parent::__construct($_id, $_name, $_brand, $_image, $_price, $_category);
  }
}