<?php
$tab = $_GET['pg'] ?? 'product-delete';
$error = [];
$id = $_GET['id'] ?? null;
$product = new Raw;
$row = $product->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
    
           $product->delete($row['id']);
           redirect('raw-stocks');
   
              
}

require view_path('stocks/raw-stocks-delete');