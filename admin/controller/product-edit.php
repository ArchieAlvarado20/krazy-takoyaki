<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'product-edit';
$error = [];
$id = $_GET['id'] ?? null;
$product = new Product;
$row = $product->get_one(['id'=>$id]);

if($_SERVER['REQUEST_METHOD'] == "POST" && $row){

  if(!empty($_FILES['image']['name']))
    {
      $_POST['image'] = $_FILES['image'];
    }
    $error = $product->validate($_POST,$row['id']);
    $_POST['category'] == true ? $_POST['category'] = 1 : $_POST['category'] = 0;

   if($_POST['category'] == 1){
      $_POST['cost'] = 0;
      $_POST['re-order'] = 0;
   }else{
    $_POST['price'] = 0;
   }
  
    if(empty($error)){
      $folder = "upload/";
      if(!file_exists($folder)){
        mkdir($folder,0777,true);
      }

      if(!empty($_POST['image']))
      {
          $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));

          $destination = $folder . $product->generate_filename();
          move_uploaded_file($_POST['image']['tmp_name'], $destination);
          $_POST['image'] = $destination;

              //delete old image
          if(file_exists($row['image']))
          {
            unlink($row['image']);
          }
      }
      $product->update($row['id'],$_POST);    
      
      redirect('product');
    }
  
}

require view_path('product/product-edit');