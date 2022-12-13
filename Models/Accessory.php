<?php

class Accessory extends Product{
  public $size;
  public $color;

  /**
   * @param String $_size
   * @param String $_color
   */
  public function __construct($_id, $_name, $_brand, $_image, $_price, Category $_category, $_size, $_color)
  {
    $this->size = $_size;
    $this->color = $_color;

    parent::__construct($_id, $_name, $_brand, $_image, $_price, $_category);
    $this->id = '#access' . $_id;
  }
}