<?php
$tab = $_GET['pg'] ?? 'stocks-delete';
$error = [];
$id = $_GET['id'] ?? null;
$stock = new Stocks;
$row = $stock->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
            //  show($row);
            //  die;
            $qty = $row['qty'];
            $p_id = $row['p_id'];
            $db = new Database;
            $db->query("delete from tblstock where id = '$id'");
            $db->query("update tblproduct set qty = qty - '$qty' where id = '$p_id' limit 1");     
            redirect('stocks');
}

require view_path('stocks/stocks-delete');