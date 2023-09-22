<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'inventory';
    $inventoryClass  = new product();
    $inventorys = $inventoryClass->query("select * from tblproduct where category = 0 order by view desc");
require view_path('stocks/inventory');