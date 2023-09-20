<?php
$tab = $_GET['pg'] ?? 'product-delete';
$error = [];
$id = $_GET['id'] ?? null;
$product = new Product;
$row = $product->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
    
           $product->delete($row['id']);
           redirect('product');
   
              
}

require view_path('product/product-delete');