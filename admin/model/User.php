<?php

class User extends Model
{
                protected $table = "tblusers";
                protected $allowed_columns = [
                    'name',
                    'email',
                    'password',
                    'phone',
                    'role',
                    'gender',
                    'image',
                    'created_at',
                    'verify_status'
                ];
        public function validate($data , $id = null){
            $error = [];

            
                    //check username
                    if(empty($data['name'])){
                        $error['name'] = "Username is required";
                    }else
                    if(!preg_match("/[A-Za-z'-']/",$data['name'])){
                        $error['name'] = "Only letters are allowed in username";
                    }
                    //check email
                    if(empty($data['email'])){
                        $error['email'] = "Email is required!";
                    }else
                    if(filter_var($data['email'],FILTER_VALIDATE_EMAIL) == false){
                        $error['email'] = "Email is not valid";
                    }
                    
                     //check role
                     if(empty($data['role'])){
                        $error['role'] = "Role is required!";
                    }
                     //check role
                     if(empty($data['phone'])){
                        $error['phone'] = "Phone number is required!";
                    }
                   
                    //check password
                    if(!$id){
                        if(empty($data['password'])){
                            $error['password'] = "Password is required!";
                        }else
                        if(strlen($data['name']) < 8 ) {
                            $errors['password'] = "Password should be min 8 characters and max 16 characters";
                        }
                         //confirm password
                        if(empty($data['retype-password'])){
                            $error['retype-password'] = "Please confirm your password!";
                        }else
                        if($data['password'] !== $data['retype-password']){
                            $error['retype-password'] = "Password do not match";
                        }
                    }else{

                    if(!empty($data['password']))
                    {
                        if(strlen($data['name']) < 8 ) {
                            $errors['password'] = "Password should be min 8 characters and max 16 characters";     
                        }
                        //confirm password
                        if(empty($data['retype-password'])){
                            $error['retype-password'] = "Please confirm your password!";
                        }else
                        if($data['password'] !== $data['retype-password']){
                            $error['retype-password'] = "Password do not match";
                        }
                    }
                }
                //search for more validation...
            return $error;
    }
    public function generate_filename($ext = "jpg" || "jpeg" || "png" || "gif"){
        return hash("sha1",rand(1000, 999999999))."_".rand(1000,9999).".".$ext;
    }
}
