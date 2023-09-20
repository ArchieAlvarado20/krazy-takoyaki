<?php
session_start();
define("ABSPATH", true);
date_default_timezone_set("Asia/Manila");
require_once '../admin/core/init.php';

$controller = $_GET['pg'] ?? "login-admin";
$controller = strtolower($controller);



if(file_exists("../admin/controller/".$controller. ".php")){
    require "../admin/controller/".$controller. ".php";
}else{
    echo "Controller Not Found";
}


