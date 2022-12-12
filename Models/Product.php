<?php

class Product{

  public $id;
  public $name;
  public $brand;
  public $image;
  public $price;
  public $category;
  public $is_available = True;

  /**
   * @param String $_id [#0xxx Toys] [#1xxx Foods] [#2xxx Accessories]
   * @param String $_name
   * @param String $_brand
   * @param String $_image url image
   * @param Number $_price ex. 12.99
   * @param Category $_category
   */
  public function __construct($_id, $_name, $_brand, $_image, $_price, Category $_category)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->image = $_image;
    $this->price = $_price;
    $this->category = $_category;
  }
}