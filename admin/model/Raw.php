<?php
/**
 * Product Class
 */
class Raw extends Model
{

                protected $table = "tblproduct";
                protected $allowed_columns = [
                    'id',
                    'p_name',
                    'description',
                    'category',
                    're_order',
                    'image',
                    'date',
                    'view',
                    'pcode',
                    'cost',
                    
                  
                ];
        public function validate($data, $id = null){
            $error = [];
            
                    //check username
                    if(empty($data['description'])){
                        $error['description'] = "Product description is required";
                    }
                    if(empty($data['p_name'])){
                    $error['p_name'] = "Product name is required";
                    }
                    //check price
                    if(empty($data['re_order'])){
                        $error['re_order'] = "Re-order level is required";
                    }
                    if(empty($data['cost'])){
                        $error['cost'] = "Product cost is required";
                    }
                 
                    //check price
                   $max_size = 4;//mbs
                   $size = $max_size * (1024 *1024);
                  //show($data['image']);die;
                   if(!$id || ($id && !empty($data['image']))){
                        if(empty($data['image'])){
                            $error['image'] = "Product image is required";
                        }else
                        if(!($data['image']['type'] == "image/jpeg" || $data['image']['type'] == "image/jpg" || $data['image']['type'] == "image/png")){
                        $error['image'] = "File must be jpeg or png";
                        }else
                        if($data['image']['error'] > 0){
                            $error['image'] = "The image is failed to upload. Error No.".$data['image']['error'];
                        }else
                        if($data['image']['size'] > $size){
                            $error['image'] = "The imga must be lower than " .$max_size."Mb";
                        }
                   }


                    return $error;
                }    
    public function generate_filename($ext = "jpg" || "jpeg" || "png" || "gif"){
        return hash("sha1",rand(1000, 999999999))."_".rand(1000,9999).".".$ext;
    }
}
