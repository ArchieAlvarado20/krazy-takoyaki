<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'category';
    $saleClass = new Sales();
    $sales = $saleClass->query("select * from vw_sales where status = 'Sold' order by id desc");
    $cashierClass = new User;
    $cashier = $cashierClass->query("select * from tblusers where role = 'cashier'");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $start = $_POST['start'];
    $end = $_POST['end'];
    $filter = $_POST['filter'] ?? null;
    $cashier1 = $_POST['cashier'] ?? null;
    if($cashier1){
        $sales = $saleClass->query("select * from vw_sales where (sdate between '$start' and '$end' ) and user_id like '$cashier1' && status = 'Sold' order by id desc");
    }else{
        $sales = $saleClass->query("select * from vw_sales where (sdate between '$start' and '$end' ) && status = 'Sold' order by id desc");
    }
}
require view_path('sales/sold-items');