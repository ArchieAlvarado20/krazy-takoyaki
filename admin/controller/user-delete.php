<?php
$tab = $_GET['pg'] ?? 'user-delete';
$error = [];
$user = new User();
$id = $_GET['id'] ?? null;

$row = $user->get_one(['id'=>$id]);
if($_SERVER['REQUEST_METHOD'] == "POST"){
  //  show($_POST);
  //  die;

        $user->delete($id);
        redirect('user');
}
require view_path('user/user-delete');
// if(Auth::access('admin')){
//   require view_path('auth/staff-delete');
// }else{
//   Auth::setMessage("Only admins can delete users");
//   require view_path('auth/denied');
// }
