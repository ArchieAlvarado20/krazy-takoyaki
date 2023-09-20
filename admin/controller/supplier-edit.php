<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'supplier-edit';
$error = [];
$id = $_GET['id'] ?? null;
$supplier = new Supplier;
$row = $supplier->get_one(['id'=>$id]);

if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
  
    $error = $supplier->validate($_POST,$row['id']);
    if(empty($error)){

      $supplier->update($row['id'],$_POST);   
      
      redirect('supplier');
    }
  
}

require view_path('supplier/supplier-edit');