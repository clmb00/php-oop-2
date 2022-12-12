<?php

include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Accessory.php';

$dogs_category = new Category('Dogs', './Img/dog.png');
$cats_category = new Category('Cats', './Img/cat.png');
$fish_category = new Category('Fish', './Img/clown-fish.png');

$products = [
  "Toys" => [
    new Toy('#0000','Spinky Ball','Top Paw','https://s7d2.scene7.com/is/image/PetSmart/5290282?$CLEARjpg$',2.99,$dogs_category,'Green','Tough'),
    new Toy('#0001','Boss Bones','Joyhound','https://s7d2.scene7.com/is/image/PetSmart/5292673?$CLEARjpg$',22.99,$dogs_category,'Brown','Chew'),
    new Toy('#0002','Furry Mice','Whisker City','https://s7d2.scene7.com/is/image/PetSmart/5287880?$CLEARjpg$',6.99,$cats_category,'Grey','Interactive'),
    new Toy('#0003', '4-Knot Rope', 'Joyhound', 'https://s7d2.scene7.com/is/image/PetSmart/5331719?$CLEARjpg$', 7.5, $dogs_category, 'Multicolor', 'Tough')
  ],
  "Foods" => [
    new Food('#1000','Seafood Sensations','Purina','https://s7d2.scene7.com/is/image/PetSmart/5219532?$CLEARjpg$',20.99,$cats_category,'22 Lb','Seafood'),
    new Food('#1001', 'Froze Brine Shrimp', 'Omega', 'https://s7d2.scene7.com/is/image/PetSmart/5230222?$CLEARjpg$', 9.49, $fish_category, '4 Oz', 'Shrimp'),
    new Food('#1002', 'Frozen Bloodworms', 'Omega', 'https://s7d2.scene7.com/is/image/PetSmart/5210921?$CLEARjpg$', 8.5, $fish_category, '3.5 Oz', 'Bloodworms'),
    new Food('#1003', 'Sensitive Stomach Food', "Hill's Science Diet", 'https://s7d2.scene7.com/is/image/PetSmart/5286296?$CLEARjpg$', 3.19, $dogs_category, '12.5 Oz', 'Turkey & Rice')
  ],
  "Accessories" => [
    new Accessory('#2000','Stainless Steel Bowl','Top Paw','https://s7d2.scene7.com/is/image/PetSmart/5270249?$CLEARjpg$',7,$dogs_category,'2 Pt','Grey'),
    new Accessory('#2001', 'Canister Filter FX6', 'Fluval', 'https://s7d2.scene7.com/is/image/PetSmart/5105630?$CLEARjpg$', 370, $fish_category, 'Big', 'Black'),
    new Accessory('#2002', 'Holiday Cat Hoodie', 'Merry & Bright', 'https://s7d2.scene7.com/is/image/PetSmart/5332801?$CLEARjpg$', 16.99, $cats_category, 'Small', 'Red')
  ]
];

// TEST DISABLED BUTTONS BUY
$products["Toys"][2]->set_availabilty(false);
$products["Foods"][0]->set_availabilty(false);
$products["Foods"][1]->set_availabilty(false);
$products["Accessories"][2]->set_availabilty(false);