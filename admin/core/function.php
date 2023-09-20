<?php

use function PHPSTORM_META\type;

function show($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
function view_path($view){
    if(file_exists("../admin/view/$view.view.php")){
    return "../admin/view/$view.view.php";
    }else{
        echo "view '$view' not found!";
    }
}
function esc($str){
    return htmlspecialchars($str);
}

function redirect($page){
    header('Location: index.php?pg=' .$page);
    die;
}

function set_value($key, $default = ""){
    if(!empty($_POST[$key])){
        return $_POST[$key];
    }
    return $default;
}
function aunthenticate($row){
    $_SESSION['user'] = $row;
}
function auth($column){
    if(!empty( $_SESSION['user'][$column])){
        return $_SESSION['user'][$column];
    }
    return "Unknown";
}

function crop($filename,$size = 400, $type = 'product'){

    $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
    // $cropped_file = preg_replace("/\.$ext$/", "_cropped.".$ext, $filename);  
    $cropped_file = str_replace(".".$ext, "_cropped.".$ext, $filename);
    
    if(file_exists($cropped_file))
    {
        return $cropped_file;
    }
    //if file to cropped does not exist
    if(!file_exists($filename)){
        if($type == "male"){
            return 'assets/img/male.jpg';
        }else
        if($type == "female"){
            return 'assets/img/female.jpg';
        }else
        {
            return 'assets/img/no_image.jpg';
        }
    }
    
    //create image resource...
    switch ($ext){
                case 'jpg':
                case 'jpeg':
                    $src_image = imagecreatefromjpeg($filename);
                break;
                case 'gif':
                    $src_image = imagecreatefromgif($filename);
                break;
                case 'png':
                    $src_image = imagecreatefrompng($filename);
                break;
                default;
                    return $filename;
                break;
    }
  
    //assign values...
    $dst_x = 0;
    $dst_y = 0;
    $dst_w = (int)$size;
    $dst_h = (int)$size;

    $original_width = imagesx($src_image);
    $original_height = imagesy($src_image);
    if($original_width < $original_height){
        $src_x = 0;
        $src_y = ($original_height - $original_width) / 2;
        $src_w = $original_width;
        $src_h = $original_width;
    }else{
        $src_y = 0;
        $src_x = ($original_width - $original_height) / 2;
        $src_w = $original_height;
        $src_h = $original_height;
    }
     //set crop params...
    $dst_image = imagecreatetruecolor((int)$size,(int)$size);
    imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
    //save final image...
    switch ($ext){
        case 'jpg' :
        case 'jpeg' :
            imagejpeg($dst_image,$cropped_file);
        break;
        case 'gif' :
            imagegif($dst_image,$cropped_file);
        break;
        case 'png' :
            imagepng($dst_image,$cropped_file);
        break;
        default;
            return $filename;
        break;
        }
    
    imagedestroy($dst_image);
    imagedestroy($src_image);

    return $cropped_file;
}

function get_trans_count()
{
    $date = date('Y-m-d');
    $num = 1;
    $db = new Database();
    $rows = $db->query("select trans_count from tblcart where sdate = '$date' order by id desc limit 1");

    if(is_array($rows)){
        $num = (int)$rows[0]['trans_count'] + 1;
    }

    return $num;
}

