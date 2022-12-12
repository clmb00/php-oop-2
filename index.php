<?php

$accepted = ["Dogs" => "true", "Cats" => "true", "Fish" => "true"];

if(!empty($_GET)){
  $accepted = $_GET;
}

include_once __DIR__ . '/db.php';

include_once __DIR__ . '/Layout/head.php';
include_once __DIR__ . '/Layout/header.php';
include_once __DIR__ . '/show_items.php';
include_once __DIR__ . '/Layout/footer.php';