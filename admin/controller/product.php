<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'dashboard';

    $productClass = new Product();
    $products = $productClass->query("select * from tblproduct order by id desc");

if(Auth::access('')){
    require view_path('product/product');  
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied');
}

