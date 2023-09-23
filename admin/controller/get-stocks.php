<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'get-stocks';
$error = [];

    $stockClass  = new Database();
    $stocks = $stockClass->query("select * from vw_sales where category = 0 && status = 'Raw' order by id desc");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
//  show($_SESSION['refno']);
//         die;
        $error = $ref->validate($_POST);
        
          $_SESSION['refno'] = $_POST['refno'];

          redirect('stocks-new');  
        
  }
require view_path('stocks/get-stocks');