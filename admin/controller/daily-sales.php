<?php
defined("ABSPATH") ? "" : die();
$_SESSION['revenue'] = "";
$tab = $_GET['pg'] ?? 'daily-sales';
    $date = date('Y-m-d');
    $saleClass = new Sales();
    $sales = $saleClass->query("select * from vw_sales where sdate = '$date' && status = 'Sold' order by id desc");
    $daily_sales = $saleClass->query("select sum(total) as total from tblcart where sdate ='$date' && status = 'Sold'");
    $cashierClass = new User;
    $cashier = $cashierClass->query("select * from tblusers where role = 'cashier'");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $start = $_POST['start'];
    $end = $_POST['end'];
    $filter = $_POST['filter'] ?? null;
    $cashier1 = $_POST['cashier'] ?? null;
    if($cashier1){
        $st = date("F j, Y", strtotime($start));
        $en = date("F j, Y", strtotime($end));
        $sales = $saleClass->query("select * from vw_sales where (sdate between '$start' and '$end' ) and user_id like '$cashier1' && status = 'Sold' order by id desc");
        $daily_sales = $saleClass->query("select sum(total) as total from vw_sales where (sdate between '$start' and '$end' ) and user_id like '$cashier1' && status = 'Sold' order by id desc");
        $_SESSION['revenue'] = "Revenue of $cashier1 as of $st to $en";
    }else{
        $st = date("F j, Y", strtotime($start));
        $en = date("F j, Y", strtotime($end));
        $_SESSION['revenue'] = "Revenue of all cashier as of $st to $en";
        $sales = $saleClass->query("select * from vw_sales where (sdate between '$start' and '$end' ) && status = 'Sold' order by id desc");
        $daily_sales = $saleClass->query("select sum(total) as total from vw_sales where (sdate between '$start' and '$end') && status = 'Sold' order by id desc");
    }
}
require view_path('sales/daily-sales');