<?php
$tab = $_GET['pg'] ?? 'supplier-new';
$error = [];
$supplier = new Supplier;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;
    $error = $supplier->validate($_POST);
    if(empty($error)){
      $supplier->insert($_POST); 
      redirect('supplier');
    } 
}
require view_path('supplier/supplier-new');