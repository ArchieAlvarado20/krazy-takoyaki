<?php

$error = [];
if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $user = new User;

            if($row = $user->where(['email'=>$_POST['email']],1,0)){
                    // show($row);
                    // var_dump(($row['password'] === $_POST['password']));
                    // die;
                    if(password_verify($_POST['password'],$row[0]['password'])){
                        aunthenticate($row[0]);

                        if(auth('role')=='admin'){
                            if(auth('verify_status') == 1){
                                redirect('home');
                            }else{
                                redirect('denied');
                            }
                        }else{
                            if(auth('verify_status') == 1){
                                    redirect('pos');
                            }else{
                                redirect('denied');
                            }
                        } 
                    }else{
                        $error['password'] = "Wrong password";
                    }
            }else{
                $error['email'] = "Wrong email";
            }
    }

require view_path('auth/login');