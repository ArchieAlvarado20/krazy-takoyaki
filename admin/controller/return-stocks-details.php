<?php
$tab = $_GET['pg'] ?? 'return-stocks-details';
$error = [];
$id = $_GET['id'] ?? null;
$cancel = new Cancel_details;
$row = $cancel->get_one(['id'=>$id]);  
require view_path('stocks/return-stocks-details');