<?php
$tab = $_GET['pg'] ?? 'reference-new';
$error = [];
$supplierClass = new Supplier();
$suppliers = $supplierClass->query("select * from tblsupplier");

$userClass = new User();
$users = $userClass->query("select * from tblusers");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;
    $reference = new Reference();
    $error = $reference->validate($_POST);
    $_POST['status'] = "Pending";
    if(empty($error)){
      $reference->insert($_POST); 
      redirect('reference');
    } 
}
require view_path('reference/reference-new');