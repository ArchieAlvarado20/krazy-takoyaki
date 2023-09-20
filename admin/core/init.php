<?php
require_once '../admin/core/config.php';
require_once '../admin/core/function.php';
require_once '../admin/core/database.php';
require_once '../admin/core/model.php';
require_once '../admin/core/code-generator.php';

spl_autoload_register('my_function');

function my_function($classname){
    $filename = "../admin/model/".ucfirst($classname) . ".php";
    if(file_exists($filename)){
        require $filename;
    }
}
?>