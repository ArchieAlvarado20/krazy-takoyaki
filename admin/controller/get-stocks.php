<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'get-stocks';
$error = [];

    $stockClass  = new Database();
    $stocks = $stockClass->query("select * from vw_sales where category = 0 && status = 'Raw' order by id desc");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

  }
require view_path('stocks/get-stocks');