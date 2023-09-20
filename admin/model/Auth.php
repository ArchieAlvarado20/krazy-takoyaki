<?php

// aunthentication class
class Auth 
{
    public static function get($column){
        if(!empty( $_SESSION['user'][$column])){
            return $_SESSION['user'][$column];
        }
        return "Unknown";
    }

    public static function logged_in(){

        if(!empty( $_SESSION['user'])){
            $db= new Database;
           if($db->query("select * from tblusers where email = : email limit 1",['email'=>$_SESSION['user']['email']])){
            return true;
           } 
        }
        return false;
    }
    public static function access($role){
        $access['admin']   = ['admin'];
        $access['cashier'] = ['admin','cashier'];

        $myRole = self::get('role');
        if(in_array($myRole, $access['admin'])){
            return true;
        } 
     return false;
    }
    public static function setMessage($message){
        $_SESSION['message'] = $message;
    }
    public static function getMessage(){
        if(!empty($_SESSION['message'])){
            $message = $_SESSION['message'];
             unset($_SESSION['message']);
            return $message;
           
        }
    }
}

