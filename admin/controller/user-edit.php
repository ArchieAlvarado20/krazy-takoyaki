<?php

$tab = $_GET['pg'] ?? 'user-edit';
$error = [];
$user = new User();
$id = $_GET['id'] ?? null;

$row = $user->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(!empty($_FILES['image']['name']))
  {
    $_POST['image'] = $_FILES['image'];
  }
  //  show($_POST);
  //  die;
    $user = new User;
    $error = $user->validate($_POST,$id);
    if(empty($error)){
      if(empty($_POST['password'])){
        unset($_POST['password']);
        $folder = "upload/";
        if(!file_exists($folder)){
          mkdir($folder,0777,true);
        }
  
        if(!empty($_POST['image']))
        {
            $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
  
            $destination = $folder . $user->generate_filename();
            move_uploaded_file($_POST['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
  
                //delete old image
            if(file_exists($row['image']))
            {
              unlink($row['image']);
            }
        }
      }else{
              $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT );
          
      }
      $user->update($id,$_POST);   

      redirect('user');
    }
  
}
require view_path('user/user-edit');