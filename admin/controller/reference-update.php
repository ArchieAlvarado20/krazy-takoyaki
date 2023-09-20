<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'supplier';
$id = $_GET['id'] ?? null;
$reference = new Reference;
$row = $reference->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
   
        if($id){
            // show($_POST);
            // die;
            $reference->query("UPDATE tblreference SET status = 'Done' WHERE id= '$id'");
            redirect('reference');
        } 
            
}
require view_path('reference/reference-update');