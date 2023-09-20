<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'critical';
$error = [];

    $stockClass  = new Product();
    $stocks = $stockClass->query("select * from vw_stock where category = 0 order by id desc");

    $ref = new Reference();
    $refno = $ref->query("select * from tblreference where status = 'Pending' limit 100");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
//  show($_SESSION['refno']);
//         die;
        $error = $ref->validate($_POST);
        
          $_SESSION['refno'] = $_POST['refno'];
          $_SESSION['name'] = $_POST['name'];

          redirect('stocks-new');  
        
  }
require view_path('stocks/stocks');