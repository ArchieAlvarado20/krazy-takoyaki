<?php

$error = [];
$tab = $_GET['pg'] ?? 'user-new';
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;
    $user = new User;
    if(!empty($_FILES['image']['name']))
          {
            $_POST['image'] = $_FILES['image'];
          }
    $error = $user->validate($_POST);
    if(empty($error)){   
     
      if($row = $user->where(['email'=>$_POST['email']],1,0)){
        $error['email'] = "Email already exist";
      }else{
          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT );
          $folder = "upload/";
          if(!file_exists($folder)){
            mkdir($folder,0777,true);
          }
          $ext = strtolower(pathinfo($_POST['image']['name'],PATHINFO_EXTENSION));
          $destination = $folder . $user->generate_filename();
          move_uploaded_file($_POST['image']['tmp_name'], $destination);
          $_POST['image'] = $destination;
 
          $user->insert($_POST);
          redirect('user');
      }              
    }
}

require view_path('user/user-new');