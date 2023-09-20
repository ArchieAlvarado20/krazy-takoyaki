<?php
$tab = $_GET['pg'] ?? 'reference-delete';
$error = [];
$id = $_GET['id'] ?? null;
$reference = new Reference;
$row = $reference->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST" && $row){
    
           $reference->delete($row['id']);
           redirect('reference');       
}

require view_path('reference/reference-delete');