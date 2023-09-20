<?php
$tab = $_GET['pg'] ?? 'supplier-delete';
$error = [];
$id = $_GET['id'] ?? null;
$supplier = new Supplier;
$row = $supplier->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
    
           $supplier->delete($row['id']);
           redirect('supplier');
   
              
}

require view_path('supplier/supplier-delete');