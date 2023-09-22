<?php

$error = [];
$tab = $_GET['pg'] ?? 'user-new';
if($_SERVER['REQUEST_METHOD'] == "POST"){
  // show($_POST);
  // die;
    $user = new User;
    $error = $user->validate($_POST);
    if(empty($error)){             
      if($row = $user->where(['email'=>$_POST['email']],1,0)){
        $error['email'] = "Email already exist";
      }else{
          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT );
      $user->insert($_POST);
      redirect('user');
      }              
    }
}

require view_path('user/user-new');