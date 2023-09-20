<?php
$tab = $_GET['pg'] ?? 'product-new';
$error = [];


if($_SERVER['REQUEST_METHOD'] == "POST"){
  $product = new Product;
  $_POST['date'] = date("Y-m-d H:i:s");
  $_POST['user_id'] = auth("id");
  $_POST['p_name'] = strtoupper($_POST['p_name']);
  // show($_POST);
  // die;

 
  if(!empty($_FILES['image']['name']))
  {
    $_POST['image'] = $_FILES['image'];
  }
  $error = $product->validate($_POST);
  $_POST['category'] == true ? $_POST['category'] = 1 : $_POST['category'] = 0;
  if(empty($error)){
    $folder = "upload/";
    if(!file_exists($folder)){
      mkdir($folder,0777,true);
    }
    $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
    $destination = $folder . $product->generate_filename();
    move_uploaded_file($_POST['image']['tmp_name'], $destination);
    $_POST['image'] = $destination;
    $product->insert($_POST);   

    redirect('product');
    } 
}
require view_path('product/product-new');