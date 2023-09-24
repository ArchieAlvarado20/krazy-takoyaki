<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'dashboard';

    $productClass = new Product();
    $products = $productClass->query("select * from tblproduct where category = 0  order by id desc");

if(Auth::access('')){
    require view_path('stocks/raw-stocks');  
}else{
    Auth::setMessage("You dont have access to the admin page");
    require view_path('auth/denied');
}

