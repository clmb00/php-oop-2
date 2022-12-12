<?php

class Product{

  public $id;
  public $name;
  public $brand;
  public $image;
  public $price;
  public $category;
  protected $is_available = True;

  /**
   * @param String $_id [#0xxx Toys] [#1xxx Foods] [#2xxx Accessories]
   * @param String $_name
   * @param String $_brand
   * @param String $_image url image
   * @param Float $_price ex. 12.99
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

  public function set_availabilty($bool){
    $this->is_available = $bool;
  }

  public function get_availabilty(){
    return $this->is_available;
  }

  public function get_price(){
    return number_format($this->price,2) . ' &euro;';
  }
}