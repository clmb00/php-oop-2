<?php

if(!empty($_GET)){
  $filtered = $_GET;
}

include_once __DIR__ . '/db.php';

include_once __DIR__ . '/Layout/head.php';
include_once __DIR__ . '/Layout/header.php';
include_once __DIR__ . '/show_items.php';
include_once __DIR__ . '/Layout/footer.php';