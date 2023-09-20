<?php

$tab = $_GET['pg'] ?? 'user-edit';
$error = [];
$user = new User();
$id = $_GET['id'] ?? null;

$row = $user->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST"){
  //  show($_POST);
  //  die;
    $user = new User;
    $error = $user->validate($_POST,$id);
    $_POST['verify_status'] == true ? $_POST['verify_status'] = 1 : $_POST['verify_status'] = 0;
    if(empty($error)){
      if(empty($_POST['password'])){
        unset($_POST['password']);
      }else{
              $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT );
      }
      $user->update($id,$_POST);   

      redirect('user');
    }
  
}
require view_path('user/user-edit');