<?php
$tab = $_GET['pg'] ?? 'product-delete';
$error = [];
$id = $_GET['id'] ?? null;
$cancel = new Cancel_details;
$row = $cancel->get_one(['id'=>$id]);  
require view_path('sales/cancelled-items-details');