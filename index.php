<?php

include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Accessory.php';

$dogs_category = new Category('Dogs', './Img/dog.png');
$cats_category = new Category('Cats', './Img/cat.png');
$cats_category = new Category('Fish', './Img/clown-fish.png');

$toys = [
  new Toy('#0000','Spinky Ball','Top Paw','https://s7d2.scene7.com/is/image/PetSmart/5290282?$CLEARjpg$',2.99,$dogs_category,'Green','Tough'),
  new Toy('#0001','Boss Bones','Joyhound','https://s7d2.scene7.com/is/image/PetSmart/5292673?$CLEARjpg$',22.99,$dogs_category,'Brown','Chew'),
  new Toy('#0002','Furry Mice','Whisker City','https://s7d2.scene7.com/is/image/PetSmart/5287880?$CLEARjpg$',6.99,$cats_category,'Grey','Interactive')
];

$foods = [
  new Food('#1000','Seafood Sensations','Purina','https://s7d2.scene7.com/is/image/PetSmart/5219532?$CLEARjpg$',20.99,$cats_category,'22 Lb','Seafood')
];

$accessories = [
  new Accessory('#2000','Stainless Steel Bowl','Top Paw','https://s7d2.scene7.com/is/image/PetSmart/5270249?$CLEARjpg$',7,$dogs_category,'2 Pt','Grey')
];

foreach($toys as $toy){
  echo('<pre>');
  var_dump($toy);
  echo('</pre>');
}

echo('<pre>');
$foods[0]->get_availabilty();
var_dump($foods[0]);
echo('</pre>');
echo('<pre>');
$accessories[0]->set_availabilty(false);
var_dump($accessories[0]);
$accessories[0]->get_availabilty();
echo('</pre>');
echo($accessories[0]->get_price());